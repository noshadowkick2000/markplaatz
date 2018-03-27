<?php
$servername = "azura.ga";
$username = "mark";
$password = "jd6320";
$dbname = "markplaatz";

//login credentials
$us = $_POST['usr'];
$pw = md5($_POST['pwd']);

  

// Create connection
$conn = mysqli_connect('azura.ga', $username, $password, $dbname);

//werkelijke password opvragen
$sql_pwGet = "SELECT Wachtwoord FROM Akkount WHERE Username='$us'";
$pw_real = mysql_fetch_array($conn->query($sql_pwGet));

echo $pw_real;
if ($pw == $pw_real){
	session_start();
	$_SESSION['STAGE'] = 1;
	$_SESSION['USRN'] = $us;
	haeder("Location: index.php");
}else{
	echo "Login Failed.";
	
	echo $pw;
}


mysqli_close($conn);
?>