<?php
session_start();
unset($_SESSION['registrarlogin']);
header("location:../../index.php");
?>
