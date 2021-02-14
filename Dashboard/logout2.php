<?php 
require_once('config/db.php');
session_start();
session_unset($_SESSION['emaill']);
session_destroy();
header("location: ../index.php");

?>