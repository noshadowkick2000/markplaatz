
<?php
$servername = "azura.ga";
$username = "mark";
$password = "jd6320";
$dbname = "markplaatz";

$varSort = $_POST['formCategorie'];
$naam = $_POST['name'];
$prijs = $_POST['price'];
$desc = $_POST['Br'];

       session_start();
          if (isset($_SESSION['STAGE'])){
            $st = $_SESSION['STAGE'];
          }else{
            $st = "0";
          }
          if (isset($_SESSION['USRN'])){
            $usrn = $_SESSION['USRN'];
          }else{
            $usrn = "";
          }
		  
		  
		  




// Create connection

if ($usrn !=""){ 
$conn = mysqli_connect('azura.ga', $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql2='SELECT UserID FROM akkount WHERE Username=\''.$usrn.'\'';
$query2 = mysqli_query($conn, $sql2);

while ($row = mysqli_fetch_assoc($query2)){
	$userid=$row['UserID'];
}


$sql = 'INSERT INTO aanbieding (NaamAanbieding, Beschrijving, Prijs, Status, Datum, Categorie, AanbiederID)
VALUES (\''.$naam.'\', \''.$desc.'\', \''.$prijs.'\', \'Beschikbaar\', \''.date("Y-m-d").'\',\''.$varSort.'\', \''.$userid.'\')';

mysqli_query($conn, $sql);

}


?>

						<?php
							
							$servername = "azura.ga";
							$username = "mark";
							$password = "jd6320";
							$dbname = "markplaatz";

							// Create connection

							$conn = mysqli_connect('azura.ga', $username, $password, $dbname);
						
							$sql = 'SELECT MAX(AanbiedingID) AS MaxId
								FROM aanbieding';
						
		
							$query = mysqli_query($conn, $sql);

							if (!$query) {
								die ('SQL Error: ' . mysqli_error($conn));
							}

							while ($row = mysqli_fetch_array($query)){
								$maxID = $row['MaxId'];
	
							}
							
							$target_file = $_POST['file'];
							echo $target_file;
							rename ($target_file, "prodimg/$maxID.jpg");
							header ('Location: index.php')
							
?>
