<?php
	session_start();
	$_SESSION['USRN'] = "";
	$_SESSION['STATE'] = 0;
	session_unset();
	session_destroy();
	header("Location: index.php");
	
?>