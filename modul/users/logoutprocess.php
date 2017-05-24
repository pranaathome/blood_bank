<?php
	include '../modul/users/connect.php';
	
	session_destroy();
	header('Location:/bloodbank/index.php');
?>