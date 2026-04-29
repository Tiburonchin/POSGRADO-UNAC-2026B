<?php
$homeSections = [
  __DIR__ . '/home/hero.php',
  __DIR__ . '/home/admision.php',
  __DIR__ . '/home/noticias.php',
  __DIR__ . '/home/talento.php',
  __DIR__ . '/home/programas.php',
  __DIR__ . '/home/ubicacion.php',
  __DIR__ . '/home/final-cta.php'
];

foreach ($homeSections as $sectionTemplate) {
  require $sectionTemplate;
}
