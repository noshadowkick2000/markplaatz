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

       	<style>
            a{
               color:white;
             }
        </style>
  </head>

  <body onload="cLoad();">
  	<div id="navi" class="container">
      <a href="index.php"><img class="mx-auto d-block" height="150" src="res/Market-Logo-txt.png"></a>
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
            <a class="nav-link" href="account.php">MijnMarktplaatz</a>
          </li>
          <li class="nav-item navbar-right">
            <a class="nav-link" id="login" href="login.php">Inloggen</a>
          </li>
  			</ul> 		
  		</nav>
  		<div class="alert alert-primary" id="nHEAD">
  			<strong>Melding: </strong>
  		</div>
  	</div>
	 

    <div class="container">
      
        <div class="col-sm-8">

          <H3>Recent geplaatst</H3>
          <div class="table-responsive-xl" style="overflow-x:auto;">
          	<table class="table">
          	<tbody>
          		<?php
          			include 'recentgeplaatst.php';
          		?>
         	</tbody>
          	</table>   
          </div>
      </div>
      
    </div>
  	
  </body>

  <br><br><br><br>
    <div class="container">
      <img  width="50px" src="res/market-logo.png" style="float:left;">
      <h5>Praktische opdracht informatica</h5>
      <h6><i>Gemaakt door  Twan Holtrop, Krishan Jokhan, Sander Koning, Jesper Kussendrager, Coen van Wieringen en Tim Yeung.</i></h6>
    </div>
    
    

</html>
