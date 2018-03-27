<?php
$servername = "azura.ga";
$username = "mark";
$password = "jd6320";
$dbname = "markplaatz";

//password hash
$pw = $_POST['pswd'];
$pw_hash = md5($pw);
//user account info
$un = $_POST['un'];
$email = $_POST['em'];

//user location info
$straatnaam = $_POST['street'];
$huisnummer = $_POST['sn']; //
$postcodeNUM = $_POST['pcc']; //
$postcodeCHAR = $_POST['pcl'];
$woonplaats = $_POST['wp'];


// Create connection

$conn = mysqli_connect('azura.ga', $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO akkount (username, email, wachtwoord, postcodelt, postcodenum, huisnummer, straat, woonplaats, verwijderd)
VALUES ('$un', '$email', '$pw_hash', '$postcodeCHAR', '$postcodeNUM', '$huisnummer','$straatnaam', '$woonplaats', 'True')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    session_start();
	$_SESSION['STAGE'] = 2;
} else {
    header("Location: index.php");
    session_start();
	$_SESSION['STAGE'] = 3;
}

$conn->close();
?>