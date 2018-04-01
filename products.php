

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
            <a class="nav-link" href="account.php">MijnMarktplaatz</a>
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
    <div class="container">

	  <div class="row"><!--zoekbar-->
		<div class="col-sm-3">
			<H3>Zoeken</H3>
			<form class="form" action="searchstuff.php" method="post">
				<input class="form-control mr-sm-2" type="text" placeholder="zoek naar een artikel" name="zoektext">
				<br>
				<h5>Categorie</h5>
				<input type="hidden" name="Antiek" value="0"/>
				<label class="form-check-label"> 
				<input type="checkbox" class="form-check-input" value="1" Name="Antiek">Antiek en Kunst</label>
				<br>
				<input type="hidden" name="verz" value="0"/>
				<label class="form-check-label"> 
				<input type="checkbox" class="form-check-input" value="2" Name="verz">Verzorging</label>
				<br>
				<input type="hidden" name="boek" value="0"/>
				<label class="form-check-label"> 
				<input type="checkbox" class="form-check-input" value="3" Name="boek">Boeken</label>
				<br>
				<input type="hidden" name="film" value="0"/>
				<label class="form-check-label"> 
				<input type="checkbox" class="form-check-input" value="4" name="film">Films en Muziek</label>
				<br>
				<input type="hidden" name="game" value="0"/>
				<label class="form-check-label"> 
				<input type="checkbox" class="form-check-input" value="5" name="game">Gaming</label>
				<br>
				<input type="hidden" name="auto" value="0"/>
				<label class="form-check-label"> 
				<input type="checkbox" class="form-check-input" value="6" name="auto">Auto's</label>
				<br>
				<label class="form-check-label"> 
				<input type="hidden" name="fiets" value="0"/>
				<input type="checkbox" class="form-check-input" value="7" name="fiets">Fietsen</label>
				<br>
				<label class="form-check-label">
				<input type="hidden" name="6320" value="0"/>
				<input type="checkbox" class="form-check-input" value="8" name="6320">Trekkers</label>
				<br>
				<button class="btn btn-success" type="submit">Zoeken</button>
			</form>
		</div>
		<div class="col-sm-9">
			<H3>Resultaten</H3> 
			
			
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
						
						$sql = 'SELECT * 
								FROM aanbieding';
								
							
		
						$query = mysqli_query($conn, $sql);

						if (!$query) {
							die ('SQL Error: ' . mysqli_error($conn));
						}
?>
					
	
	<table class="data-table">
		
		
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn2 = mysqli_connect('azura.ga', $username, $password, $dbname);
						
						$sql2 = 'SELECT Username
								FROM akkount 
								WHERE UserID='.$row['AanbiederID'].'';
								
							
		
						$query2 = mysqli_query($conn2, $sql2);

						if (!$query2) {
							die ('SQL Error: ' . mysqli_error($conn2));
						}
						
						$result = mysqli_query ($conn2, $sql2);
						
						while ($id = mysqli_fetch_assoc($result)){
			ECHO 			'<tr>
							<div class="card" style="width:750px;">
							<div class="card-header"><h2 class="card-title">Naam: '.$row['NaamAanbieding']. ', Artikel ID: '.$row['AanbiedingID'].'</h2></div>
							<div class="card-body"><h5 class="card-title">Datum Geplaatst: '.date('F d, Y', strtotime($row['Datum'])).'
							<br>Categorie: '.$row['Categorie'].'
							<br>Status: '.$row['Status'].'
							<br>Prijs: €'.$row['Prijs'].'
							<br>Geplaatst Door: '.$id['Username'].'</h5></div>
							<div class="card-footer">
							<a href="article.php"><Font color="blue">Artikel Bekijken</font></a>
							</div>
							<input type="hidden" name='.$row['NaamAanbieding'].' value='.$row['AanbiedingID'].'/>
							</div>
							</tr>
							<br>';
			 
						}
		}?>
		</tbody>
		
	</table>

					
				</form>
  </body>
  
</html>


