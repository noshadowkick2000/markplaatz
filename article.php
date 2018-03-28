

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
  </head>

  <body>
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
            <a class="nav-link" href="login.php">Login</a>
          </li>
  			</ul> 		
  		</nav>
  		<div class="alert alert-primary">
  			<strong>Melding </strong>.......
  		</div>
  	</div> 
	  
	  
	  

<br><br>
    <div class="container">
      
    <div class="row">
      <div class="col-sm-8">
        <div class="card" >

          <div class="card-header">

            <h3 class="card-title">Artikel</h3>

            <ul class="list-inline">
              <li class="list-inline-item" id="ART-xgezien"> keer gezien</li>
              <li class="list-inline-item" id="ART-xbewaard"> keer bewaard</li>
              <li class="list-inline-item" id="ART-dat">toegevoegd op</li>
            </ul>

            
            <button type="button" class="btn btn-danger">Bewaren</button>
            <br><br><br>
            <h4 id="ART-prijs">€[P]</h4>
          </div>
          <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br></div>
          <div class="card-footer">
            <h4>Beschrijving</h4>
            <p id="ART-des">...</p>
            <button type="button" class="btn btn-danger">Artikel delen</button>

          </div>
        
        </div>

      </div>

      <div class="col-sm-4">
        <br><br><br>
        <div class="card" >
          <div class="card-header">
            <h4 id="ART-usr">Geplaatst door [ART-usr]</h4>
            <p id="ART-usr-startDAT">lid sinds [ART-usr-startDAT]</p>
          </div>
          <div class="card-body"> <!-- safety information -->
            <p>uit [ART-usr-LOC]</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger">Naar profielpagina</button>
            <br>
            <button type="button" class="btn btn-danger">Stuur bericht</button>
            <button type="button" class="btn btn-danger">Toon telefoonnummer</button>
          </div>
        </div>
      </div>
    </div>
      
    </div>

  	
  </body>
</html>

