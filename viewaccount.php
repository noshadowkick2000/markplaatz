

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
  	<div id="navi" class="container">
  	<style>
  		li a{
  			color:white;
  		}
  	</style>
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
          
		  <li class="nav-item">
     			<a class="nav-link" href="createarticle.php">Aanbieding creëren</a>
    	  </li>
    	  <li>
            	<a class="nav-link" id=bewerk href="account.php">MijnMarkplaatz</a>
				<script>
				if (stage == "0"){
					document.getElementById("bewerk").href = "#";
				}
				</script>
          </li>

          <li class="nav-item navbar-right">
            <a class="nav-link" href="login.php" id="login">Login</a>
          </li>
  			</ul> 		
  		</nav>
  	</div>
	

    <div class="container pt-3">
      <div class="row">
        <div class="col-sm-4"> 
        <div class="card">
		<div class="card bg-dark text-white">
		<?php
		$id = $_GET['userid'];
		echo '<img alt="" class="card-img-top" src= "img/' . $id . '.jpg">';
		?>
		<div class="card-body">
		<h4 id="nHead"><?php echo htmlspecialchars($usrn); ?></h4>
		
		<?php
						$id = $_GET['userid'];
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT Email FROM akkount WHERE UserID='" . $id . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["Email"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$mail = "Dit persoon heeft nog geen mailadres toegevoegd";
						}else{
						$mail = $res;
						}
						
						$conn->close();
						
		?>
		
		<p id="nHead"><?php echo htmlspecialchars($mail); ?></p>
		</div>
		</div>
		</div>		
          
        </div>
		<div class="col-sm-8"> 
		
				<?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT Beschrijvinglang FROM akkount WHERE UserID='" . $id . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["Beschrijvinglang"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$bio = "Dit persoon heeft nog geen beschrijving geschreven";
						}else{
						$bio = $res;
						}
						
						$conn->close();
						
		?>

		
        <p><h6 class="p-3" style="background-color:#d0dbd8; border-radius:0.25vw;"><?php echo htmlspecialchars($bio); ?></h6></p>
		
		<?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT Straat, Huisnummer, Woonplaats FROM akkount WHERE UserID='" . $id . "'";
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["Straat"] . "+" . $row["Huisnummer"] . "+" . $row["Woonplaats"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$locurl = "https://www.google.com/maps/embed/v1/place?key=AIzaSyB0Ikoh_UKItvr1s7HdKfZgazuUMAMGa9g&q=nederland";
						}else{
						$locurl = "https://www.google.com/maps/embed/v1/place?key=AIzaSyB0Ikoh_UKItvr1s7HdKfZgazuUMAMGa9g&q=" . $res;
						}
						
						$conn->close();
						
		?>

	   <script>var locurl = "<?= $locurl;?>"</script>
		
		<iframe id=location class="col-sm-12"
		width="600"
		height="450"
		frameborder="0" style="border:0" allowfullscreen>
		</iframe>
		<script>document.getElementById("location").src = locurl;</script>
				
          <div class="table-responsive-xl" style="overflow-x:auto;">
          <table class="table">
           
            <tbody>
			
			<tr>
				<form method="POST" action="">
				
					<?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = mysqli_connect('azura.ga', $username, $password, $dbname);
						
						$sql = "SELECT * FROM aanbieding WHERE AanbiederID=" . $id;
								
							
		
						$query = mysqli_query($conn, $sql);

?>
					
	
	<table class="data-table">
		
		
		<tbody>
		<?php
	// Zorgt voor een Array, waardoor ieder zoekresultaat afzondeerlijk te bekijken is
	if ($query == null){
		echo "Dit persoon heeft nog geen artikelen geplaatst";
	}
	Else {
		while ($row = mysqli_fetch_array($query)){
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn2 = mysqli_connect('azura.ga', $username, $password, $dbname);
						
						// Query om weer te geven wie een aanbieding geplaatst heeft, door deze vervolgens te combineren met een array
						$sql2 = 'SELECT Username
								FROM akkount 
								WHERE UserID='.$row['AanbiederID'].'';
								
							
		
						$query2 = mysqli_query($conn2, $sql2);
						
						$result = mysqli_query ($conn2, $sql2);
						
					
						
						
						while ($id = mysqli_fetch_assoc($result)){
							
							// Hier wordt een tabel gemaakt met waarden uit de database, tot dat alle waarden gebruikt zijn.
			ECHO 			'<tr>
							<div class="card" style="width:720px;">
							<div class="card-header"><h2 class="card-title">Naam: '.$row['NaamAanbieding']. ', Artikel ID: '.$row['AanbiedingID'].'</h2></div>
							<div class="card-body">
							<div style="float:right; object-fit: contain; width:250px;"><img class="card-img-top" src="prodimg/'.$row['AanbiedingID'].'.jpg"></div>
							<h5 class="card-title">Datum Geplaatst: '.date('F d, Y', strtotime($row['Datum'])).'
							
							<br>Categorie: '.$row['Categorie'].'
							<br>Status: '.$row['Status'].'
							<br>Prijs: €'.$row['Prijs'].
							//$id is een de array waar de gebruikersnaam op wordt gehaald door een waarde die gekoppeld is aan de aanbieding database 
							'<br>Geplaatst Door: '.$id['Username'].'</h5>
							
							</div>
							
							<div class="card-footer">
							<a href="article.php?id='.$row['AanbiedingID'].'"><Font color="blue">Artikel Bekijken</font></a>
							</div>
							<input type="hidden" name='.$row['NaamAanbieding'].' value='.$row['AanbiedingID'].'/>
							
							</div>
							
							</tr>
							<br>';
			 
						}
		}
	}
		?>
		</tbody>
		
	</table>
		
		</div> 
      </div>
      
    </div>
	
	

  	
  </body>
  
    <br><br><br><br>
    <div class="container">
      <img  width="200" src="res/logo2.png">
      <h5>Praktische opdracht informatica</h5>
      <h6><i>Gemaakt door  Twan Holtrop, Krishan Jokhan, Sander Koning, Jesper Kussendrager, Coen van Wieringen en Tim Yeung.</i></h6>
      <p>© Team Anime 2018</p>
      
    </div>
	
	<!-- test area -->

</html>