<?php
session_start();
unset($_SESSION['idcard']);
header('location:index.php');
?>
