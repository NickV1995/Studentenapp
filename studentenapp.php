<?php

require_once 'pdo.php';

$db = verbinden();
if(is_null($db)) die('<h1>Database verbinding mislukt...');

echo 'Gelukt!';