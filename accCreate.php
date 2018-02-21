<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marktplaats";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO account (voornaam, achternaam, E-Mail, Wachtwoord, PostcodeCijfers, PostcodeLetters)
VALUES ('$_POST['vn']', '$_POST['an']', '$_POST['em']', '$_POST['pswd']', '$_POST['pcc']', '$_POST['pcl']')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>