<?php 
require_once('config/db.php');
session_start();
session_unset($_SESSION['email']);
session_destroy();
header("location: ../index.php");

?>