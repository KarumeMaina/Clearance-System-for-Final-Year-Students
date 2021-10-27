<?php
session_start();
unset($_SESSION['hodlogin']);
header("location:../../index.php");
?>
