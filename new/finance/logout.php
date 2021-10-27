<?php
session_start();
unset($_SESSION['financelogin']);
header("location:../../index.php");
?>
