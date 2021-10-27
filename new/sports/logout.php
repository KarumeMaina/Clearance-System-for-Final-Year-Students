<?php
session_start();
unset($_SESSION['sportslogin']);
header("location:  ../../index.php");
?>
