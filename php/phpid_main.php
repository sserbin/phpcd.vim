<?php
fclose(STDIN);
fclose(STDOUT);
fclose(STDERR);
$home_path = getenv('HOME');
$STDOUT = fopen($home_path . '/.phpcd.log', 'a');
$STDERR = fopen($home_path . '/.phpcd.log', 'a');

require $argv[2];
require __DIR__ . '/PHPID.php';
(new PHPID($argv[1], $argv[3], $argv[4]))->loop();
