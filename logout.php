<?php 
session_start();
unset($_SESSION['connected']);
header('Location: login.php');
exit;
