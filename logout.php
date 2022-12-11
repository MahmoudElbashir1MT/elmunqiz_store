<?php
require_once  'Config/config.php';
session_start();
session_unset();
session_destroy();
header("location: ".BURL);
?>