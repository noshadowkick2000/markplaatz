<?php
$usrn = $_POST['un'];
$new = "img/" . $usrn . ".jpg";
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if ($_FILES["fileToUpload"]["size"] > 25000000) {
    echo " Sorry, uw bestand is te groot.";
    $uploadOk = 0;
}
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo " Bestand is geen foto.";
        $uploadOk = 0;
    }
}

if ($uploadOk == 0) {
    echo " Sorry, uw bestand is niet geupload.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		rename($target_file,$new);
    } else {
        echo " Er is iets mis gegaan.";
    }
}

header("Location: account.php");
    session_start();
?>