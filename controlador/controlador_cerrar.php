<?php
session_start();
session_destroy();
header("location:/Sistema_web/vista/login/login.php");
?>