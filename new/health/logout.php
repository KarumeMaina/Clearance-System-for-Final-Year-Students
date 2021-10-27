<?php
session_start();
unset($_SESSION['healthlogin']);
header("location:../../index.php");
?>
