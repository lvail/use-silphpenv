<?php

include '/data/vendor/autoload.php';

use Sil\PhpEnv\Env;
use Sil\PhpEnv\EnvVarNotFoundException;

try {
    $result1 = Env::get('COMPOSER_AUTH', 'LDV: something is wrong!');
    echo $result1 . PHP_EOL;
    
    $result2 = Env::get('LDV', 'LDV: default value!');
    echo $result2 . PHP_EOL;
    
    $result3 = Env::requireEnv('LDV');
    echo $result3 . PHP_EOL;
} catch (EnvVarNotFoundException $exc) {
    echo $exc->getMessage() . PHP_EOL;
    echo $exc->getTraceAsString() . PHP_EOL;
}

echo '-------------------------------' . PHP_EOL;
echo '__DIR__=' . __DIR__ . PHP_EOL;
echo 'dirname=' . dirname(__DIR__) . PHP_EOL;
echo 'basename=' . basename(__DIR__) . PHP_EOL;
echo 'pathinfo:' . PHP_EOL;
var_dump(pathinfo(__DIR__));
echo 'pathinfo:' . PHP_EOL;
var_dump((pathinfo(__FILE__)));

