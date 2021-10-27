<?php
session_start();
unset($_SESSION['doslogin']);
header("location:../../index.php");
?>
