<?php 
session_start(); 
$_SESSION['email'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;
$_SESSION['isAdmin'] = null;
$_SESSION['user_id'] = null;
header("Location: ../index.php");
 ?>