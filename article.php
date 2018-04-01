

<!DOCTYPE html>
<html lang="en">
  <title>Markplaatz - Home</title>
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
     				<a class="nav-link" href="Forum.php">Forum</a>
    			</li>
            <a class="nav-link" href="#">MijnMarktplaatz</a>
          </li>
          <li class="nav-item navbar-right">
            <a class="nav-link" href="login.php" id="login">Login</a>
          </li>
  			</ul> 		
  		</nav>
  		<div class="alert alert-primary">
  			<strong>Melding </strong>.......
  		</div>
  	</div> 
	  
	  
	  

<br><br>
	<?php
	$id = $_GET['id'];
	
	$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = mysqli_connect('azura.ga', $username, $password, $dbname);
						
						$sql = 'SELECT * 
								FROM aanbieding
								INNER JOIN akkount ON aanbieding.AanbiederID=akkount.UserID
								WHERE aanbieding.AanbiedingID='.$id.'';
								
							
		
						$query = mysqli_query($conn, $sql);

						if (!$query) {
							die ('SQL Error: ' . mysqli_error($conn));
						}
						
					
						while ($row = mysqli_fetch_array($query))
		{
	
    echo '<div class="container">
    
    <div class="row">
      <div class="col-sm-8">
        <div class="card" >

          <div class="card-header">

            <h3 class="card-title">'.$row['NaamAanbieding'].'</h3>

            <ul class="list-inline">
              
              <li class="list-inline-item" id="ART-dat">toegevoegd op: '.date('F d, Y', strtotime($row['Datum'])).'</li>
            </ul>

            
            
            <br>
            <h4 id="ART-prijs">€'.$row['Prijs'].';</h4>
          </div>
          <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br></div>
          <div class="card-footer">
            <h4>Beschrijving</h4>
            <p id="ART-des">'.$row['Beschrijving'].'</p>
            <button type="button" class="btn btn-danger">Artikel delen</button>

          </div>
        
        </div>

      </div>

      <div class="col-sm-4">
        <br><br><br>
        <div class="card" >
          <div class="card-header">
            <h4 id="ART-usr">Geplaatst door '.$row['Username'].'</h4>
            <p id="ART-usr-startDAT">lid sinds '.date('F d, Y', strtotime($row['DatumReg'])).'</p>
          </div>
		  
          <div class="card-footer"> <!-- safety information -->
            <p>Adres: '.$row['Woonplaats'].'<br> '.$row['Straat'].' '.$row['Huisnummer'].''.$row['Toevoeging'].'<br>'.$row['PostcodeNUM'].''.$row['PostcodeLT'].'</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger">Naar profielpagina</button>
            <br>
            <button type="button" class="btn btn-danger"><a href="mailto:'.$row['Email'].'">Stuur bericht</button>
            <button type="button" class="btn btn-danger">Toon telefoonnummer</button>
          </div>
        </div>
      </div>
    </div>
      
    </div>';
		}
	?>
  	
  </body>
</html>

