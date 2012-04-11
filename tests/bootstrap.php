<?php

$root = dirname(__DIR__);
define('WWW_DIR', $root . '/www');
define('APP_DIR', $root . '/app');
define('LIBS_DIR', $root . '/libs');

require_once APP_DIR . '/bootstrap.php';

require_once 'PHPUnit/Autoload.php';
require_once __DIR__ . '/UnitTestCase.php';

