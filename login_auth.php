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
$result = $conn->query($sql_pwGet);
$pw_real = "";

if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$pw_real = $row['Wachtwoord'];
	}
}





echo $pw_real;
if ($pw == $pw_real){
	session_start();
	

	$_SESSION['STAGE'] = 1;
	$_SESSION['USRN'] = $us;

	header("Location: index.php");

}else{
	session_start();
	$_SESSION['STAGE'] = 4;
	header("Location: index.php");
}


mysqli_close($conn);
?>