<?php
session_start();
unset($_SESSION['residencelogin']);
header("location:../../index.php");
?>
