<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../admin/noticias.php");
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $users = require '../data/users.php';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['user_role'] = $users[$username]['role'];
        header("Location: ../admin/noticias.php");
        exit();
    } else {
        $error = 'Credenciales inválidas.';
    }
}
?>
<!DOCTYPE html>
<html lang="es" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Posgrado UNAC</title>
    <link rel="stylesheet" href="../assets/css/output.css">
    <style>
        /* Corrección para que el autocompletado del navegador no ponga fondo blanco y borre el texto */
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px #2a2a2a inset !important;
            -webkit-text-fill-color: white !important;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>
<body class="bg-bg-base text-text-base flex items-center justify-center min-h-screen">
    <div class="bg-surface-elevated/30 backdrop-blur-xl border border-border-base/50 p-8 rounded-3xl shadow-unac-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-unac-yellow mb-6 text-center">Acceso Administrativo</h2>
        <?php if ($error): ?>
            <div class="bg-red-500/20 text-red-400 p-3 rounded-lg mb-6 text-center text-sm"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-4">
                <label class="block text-sm font-medium text-text-muted mb-2">Usuario</label>
                <input type="text" name="username" required class="w-full bg-white border border-border-base rounded-xl px-4 py-3 text-gray-900 focus:outline-none focus:border-unac-yellow/50 transition-colors placeholder-gray-500">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-text-muted mb-2">Contraseña</label>
                <input type="password" name="password" required class="w-full bg-white border border-border-base rounded-xl px-4 py-3 text-gray-900 focus:outline-none focus:border-unac-yellow/50 transition-colors placeholder-gray-500">
            </div>
            <button type="submit" class="w-full py-3 px-6 bg-unac-yellow/10 text-unac-yellow border border-unac-yellow/30 rounded-full font-bold hover:bg-unac-yellow/20 transition-all">
                Ingresar
            </button>
        </form>
    </div>
</body>
</html>
