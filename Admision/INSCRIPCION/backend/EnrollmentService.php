<?php
/**
 * inscripcion/backend/EnrollmentService.php
 * Lógica de negocio local para el módulo de inscripción autónomo.
 */

require_once __DIR__ . '/Supabase.php';

class EnrollmentService {

    /**
     * Procesa y guarda una nueva inscripción (Usuarios -> Personas -> Teléfonos -> Inscripciones)
     */
    public function saveInscription($data) {
        date_default_timezone_set('America/Lima');
        $ms = (int)(microtime(true) * 1000);
        
        try {
            $dni = trim($data['dni']);
            
            // 1. Buscar si la persona ya existe
            $pResult = supabaseRequest('GET', "/rest/v1/personas?dni=eq.{$dni}&select=*");
            $persona = (!empty($pResult) && !isset($pResult['error'])) ? $pResult[0] : null;
            
            $idPersona = null;
            $idUsuario = null;

            if (!$persona) {
                // PASO 1: Crear Usuario
                $idUsuario = "U" . $ms;
                $newUsuario = [
                    'id_usuario' => $idUsuario,
                    'id_rol'     => 2,
                    'correo'     => $data['email'],
                    'password'   => password_hash($dni, PASSWORD_DEFAULT),
                    'estado'     => 1
                ];
                
                $resU = supabaseRequest('POST', '/rest/v1/usuarios', $newUsuario);
                if (isset($resU['error']) && strpos($resU['error'], '409') === false) {
                    throw new Exception("Error al crear usuario: " . json_encode($resU['error']));
                }

                // PASO 2: Crear Persona
                $idPersona = "P" . $ms;
                $newPersona = [
                    'id_persona'       => $idPersona,
                    'id_usuario'       => $idUsuario,
                    'dni'              => $dni,
                    'nombres'          => $data['nombre'],
                    'apellidos'        => $data['apellidos'],
                    'fecha_nacimiento' => $data['fechaNacimiento']
                ];
                
                $resP = supabaseRequest('POST', '/rest/v1/personas', $newPersona);
                if (isset($resP['error'])) {
                    if (strpos($resP['error'], '409') !== false) {
                        // Si ya existe por DNI, intentar recuperarlo
                        $pCheck = supabaseRequest('GET', "/rest/v1/personas?dni=eq.{$dni}&select=*");
                        if (!empty($pCheck) && isset($pCheck[0]['id_persona'])) {
                            $idPersona = $pCheck[0]['id_persona'];
                        } else {
                            throw new Exception("Conflicto de DNI detectado.");
                        }
                    } else {
                        throw new Exception("Error al crear persona: " . json_encode($resP['error']));
                    }
                }
            } else {
                $idPersona = $persona['id_persona'];
            }

            if (!$idPersona) throw new Exception("No se pudo determinar el ID de la persona.");

            // PASO 3: Registro de Teléfono
            $idTelefono = "T" . ((int)(microtime(true) * 1010)); // Offset para evitar colisión mínima
            $newTelefono = [
                'id_telefono' => $idTelefono,
                'id_persona'  => $idPersona,
                'numero'      => $data['celular'],
                'tipo'        => 'Celular'
            ];
            supabaseRequest('POST', '/rest/v1/persona_telefonos', $newTelefono);

            // PASO 4: Registro de Inscripción
            $idPrograma = (int)$data['idPrograma'];
            
            // Verificar si ya está inscrito en este programa
            $checkI = supabaseRequest('GET', "/rest/v1/inscripciones?id_persona=eq.{$idPersona}&id_programa=eq.{$idPrograma}&select=id_inscrito");
            
            if (empty($checkI) || isset($checkI['error'])) {
                $idInscrito = "I" . ((int)(microtime(true) * 1020));
                $newInscripcion = [
                    'id_inscrito'        => $idInscrito,
                    'id_persona'         => $idPersona,
                    'id_programa'        => $idPrograma,
                    'medio_conocimiento' => $data['medioConocimiento'] ?? 'Web',
                    'fecha_registro'     => date('Y-m-d H:i:s')
                ];
                $resI = supabaseRequest('POST', '/rest/v1/inscripciones', $newInscripcion);
                if (isset($resI['error'])) {
                     throw new Exception("Error al crear inscripción: " . json_encode($resI['error']));
                }

                // --- NOTIFICACIÓN WHATSAPP DESDE EL SERVIDOR ---
                $this->sendWhatsAppNotification([
                    'numero'   => $data['celular'],
                    'nombre'   => $data['nombre'] . ' ' . $data['apellidos'],
                    'facultad' => $data['facultad'] ?? 'Posgrado',
                    'programa' => $data['programa'] ?? 'Programa Seleccionado'
                ]);
            }

            return ['success' => true];

        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    /**
     * Envía la notificación a la API de WhatsApp vía servidor
     */
    private function sendWhatsAppNotification($info) {
        try {
            // Asegurar prefijo 51 para Perú si no lo tiene
            $numero = preg_replace('/\D/', '', $info['numero']);
            if (strlen($numero) === 9 && $numero[0] === '9') {
                $numero = '51' . $numero;
            }

            $url = 'http://168.181.185.253:3000/api/enviar-mensaje';
            $data = [
                'numero'   => $numero,
                'mensaje'  => $info['nombre'], // La API usa 'mensaje' para el nombre según la captura
                'facultad' => $info['facultad'],
                'programa' => $info['programa']
            ];

            $options = [
                'http' => [
                    'method'  => 'POST',
                    'header'  => "Content-Type: application/json\r\n",
                    'content' => json_encode($data),
                    'timeout' => 5
                ]
            ];
            
            $context = stream_context_create($options);
            @file_get_contents($url, false, $context); // Silencioso si falla
            
        } catch (Exception $e) {
            // No bloqueamos el flujo principal si falla el WhatsApp
        }
    }
}
