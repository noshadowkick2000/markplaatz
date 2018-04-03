<?php
$servername = "azura.ga";
$username = "mark";
$password = "jd6320";
$dbname = "markplaatz";

//password hash
$pw = $_POST['pswd'];
$pw_hash = md5($pw);
//user account info
$usrn = $_POST['un'];
$email = $_POST['em'];

//user location info
$bio = $_POST['bio'];
$straatnaam = $_POST['street'];
$huisnummer = $_POST['sn']; //
$postcodeNUM = $_POST['pcc']; //
$postcodeCHAR = $_POST['pcl'];
$woonplaats = $_POST['wp'];


// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error);
} 

$sql = "UPDATE akkount SET email='$email', wachtwoord ='$pw_hash', postcodelt='$postcodeCHAR', postcodenum='$postcodeNUM', huisnummer='$huisnummer', straat='$straatnaam', woonplaats='$woonplaats', beschrijvinglang='$bio' WHERE username='$usrn'";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    session_start();
	$_SESSION['STAGE'] = 1;
} else {
    header("Location: index.php");
    session_start();
	$_SESSION['STAGE'] = 3;
}

mysqli_close($conn);
?>