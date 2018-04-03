<?php
$servername = "azura.ga";
$username = "mark";
$password = "jd6320";
$dbname = "markplaatz";

// Create connection
			$id = $_GET['id'];

						$conn = mysqli_connect('azura.ga', $username, $password, $dbname);
						
						$sql = 'DELETE FROM aanbieding
								WHERE AanbiedingID='.$id.'';
						
						unlink($id'.jpg');
							
		
						$query = mysqli_query($conn, $sql);

						if (!$query) {
							die ('SQL Error: ' . mysqli_error($conn));
						}
						header ('Location: index.php')
						
?>