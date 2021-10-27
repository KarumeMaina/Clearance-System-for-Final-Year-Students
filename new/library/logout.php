<?php
session_start();
unset($_SESSION['librarylogin']);
header("location:../../index.php");
?>
