<?php

use Classes\TestClass;

require __DIR__ . '/autoload.php';
echo 'app';
$test = new TestClass();
$test->testEcho();
// include '/test.php';
// xdebug_info();
phpinfo();
