<?php 

session_start();

define('BURL', 'http://localhost/TESTSHOP/');
define('BURLA', 'http://localhost/TESTSHOP/Admin/');
define('ASSETS', 'http://localhost/TESTSHOP/Assets/');

define('BL', __DIR__.'/');
define('BLA', __DIR__.'/admin/');

require_once 'connection.php';
?>