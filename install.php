<?php

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
$_GET['m'] = 'Install';
define ( 'APP_DEBUG', true );
define ( 'APP_PATH', './App/' );
define('RUNTIME_PATH','./Runtime/');
require './ThinkPHP/ThinkPHP.php';