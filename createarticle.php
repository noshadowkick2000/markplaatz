<!DOCTYPE html>
<html lang="en">
  <title>Markplaatz - Registreren</title>
  <head>
    	 <!-- Latest compiled and minified CSS -->
    	 
       <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald|Slabo+27px" rel="stylesheet">
    	 <link rel="stylesheet" href="css.css">
	     <!-- jQuery library -->
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	     <!-- Popper JS -->
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	     <!-- Latest compiled JavaScript -->
	     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
       <meta charset="utf-8"> 
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <script type="text/javascript" src="script.js"></script>

       <?php
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
       ?>
       <script>var stage = "<?= $st;?>"</script>
       <script>var usrn = "<?= $usrn;?>"</script>
  </head>

  <body onload="adjustLogin(Number(stage));">

  	 <style>
                a{
                  color:white;
                }
              </style>
	<div id="navi" class="container">
      <img class="mx-auto d-block" height="150" src="res/Market-Logo.png">
  		<nav class="navbar navbar-expand-sm sticky-top" style="background-color:#191818; border-radius:0.5vw;">
  		
  			 <ul class="nav navbar-nav navbar-left">
    			<li class="nav-item">
    			  	<a class="nav-link" href="index.php">Home</a>
    			</li>
    			
    			<li class="nav-item">
     				<a class="nav-link" href="products.php">Producten</a>
    			</li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item navbar-right">
		  <li class="nav-item">
     				<a class="nav-link" href="createarticle.php">Aanbieding creëren</a>
    			</li>
            <a class="nav-link" href="#">MijnMarktplaatz</a>
          </li>
          <li class="nav-item navbar-right">
            <a class="nav-link" href="login.php" id="login">Login</a>
          </li>
  			</ul> 		
  		</nav>
  		
  	</div>
	  

<br><br>
    <div class="container">
		<div class="alert alert-danger">
			<strong>Notification: </strong><i>Description</i>
		</div>
		<h2>Artikel Aanmaken</h2>
		
		
			<div class="jumbotron">
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<h3>Afbeelding</h3>
						
						
						
							
						<form action="" method="post" enctype="multipart/form-data">
							
							
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Upload Afbeelding" name="submit">
						
							
						</form>
						
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
								$maxID = $row['MaxId'] + 1;
	
							}
							
							if (!empty($_FILES["fileToUpload"])){
							$target_dir = "prodimg/";
							$target_file = $target_dir . $maxID . '.jpg';
							$uploadOk = 1;
							$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
							// Check if image file is a actual image or fake image
							if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
							if($check !== false) {
								
								$uploadOk = 1;
							} 
							else {
								
								$img="Bestand is geen afbeelding. ";
								$uploadOk = 0;
								}
							}
							
							// Check file size
							if ($_FILES["fileToUpload"]["size"] > 500000000) {
								echo "Helaas, je bestand is te groot. ";
								$uploadOk = 0;
							}
							
							// Check if $uploadOk is set to 0 by an error
							if ($uploadOk == 0) {
								echo "Helaas, je bestand is niet geupload. ";
							}
							// if everything is ok, try to upload file							
							else {
								if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
									
									echo "Het bestand ". basename( $_FILES["fileToUpload"]["name"]). " is geupload, hoera!";
									$res = $target_file;
									
									
									
							
									echo '<img class="mx-auto d-block" width="400" style="border: 10px solid #EF5007" src="'.$target_file.'">';
							
								} 
								else {
									echo "Helaas, er is een fout opgetreden bij het uploaden van je bestand.";
								}	
							}	
							}
							
							
							
							
							
							
							
							
							
							
							
?>
					</div>
				<div class="form-group">
						
	
<form action="ArtCreate.php" method="post">
      
      <h5>Artikelinformatie</h5>
        <div class="form-group">
          <label for="Name">Naam aanbieding* </label>
          <input type="Name" class="form-control" id="Name" name="name">
        </div>
         <div class="form-group">
          <label for="Br">Beschrijving* </label>
          <input type="Br" class="form-control" id="Br" name="Br">
        </div>
        <div class="form-group">
          <label for="Price">Prijs* </label>
          <input type="price" class="form-control" id="price" name="price">
        </div>

<p>
categorie*
<select name="formCategorie">
  
  <option value="Antiek en Kunst">Antiek en Kunst</option>
  <option value="Verzorging">Verzorging</option>
  <option value="Boeken">Boeken</option>
  <option value="Films en Muziek">Films en Muziek</option>
  <option value="Gaming">Gaming</option>
  <option value="Auto\'s">Auto's</option>
  <option value="Fietsen">Fietsen</option>
  <option value="Trekkers">Trekkers</option>
</select>
</p>
        

       
        <button type="submit" class="btn btn-danger">Artikel Aanmaken</button>
      </form>







					
					
				</div>
				<div class="col-sm-4">
				
			

				
				
				
				</div>
			</div>
			</div>
		
    </div>

  	
  </body>
</html>
