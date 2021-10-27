<?php
session_start();
unset($_SESSION['ictlogin']);
header("location:../../index.php");
?>
