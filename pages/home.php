<?php
$homeSections = [
  __DIR__ . '/home/hero.php',
  __DIR__ . '/home/admision.php',
  __DIR__ . '/home/nuestro-anio.php',
  __DIR__ . '/home/noticias.php',
  __DIR__ . '/home/ubicacion.php'
];

foreach ($homeSections as $sectionTemplate) {
  require $sectionTemplate;
}
