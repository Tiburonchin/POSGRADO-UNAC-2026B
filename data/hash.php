<?php
$hash1 = password_hash('superadmin123', PASSWORD_DEFAULT);
$hash2 = password_hash('posgrado123', PASSWORD_DEFAULT);

$content = "<?php\nreturn [\n    'superadmin' => [\n        'password' => '$hash1',\n        'role' => 'superadmin'\n    ],\n    'posgrado_unac' => [\n        'password' => '$hash2',\n        'role' => 'posgrado_unac'\n    ]\n];\n";

file_put_contents('users.php', $content);
echo "Done";
