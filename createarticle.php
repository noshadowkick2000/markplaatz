

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
  		
  	</div>
	  

<br><br>
    <div class="container">
		<div class="alert alert-danger">
			<strong>Notification: </strong><i>Description</i>
		</div>
		<h2>Artikel Aanmaken</h2>
		
		<form action="createArticle.php">
			<div class="jumbotron">
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<h3>Afbeelding</h3>
						<img class="mx-auto d-block" width="400" style="border: 10px solid #EF5007" src="res/img.png">
						
					</div>
					
				</div>
				<div class="col-sm-4">

				
				
				
				</div>
			</div>
			</div>
		</form>
    </div>

  	
  </body>
</html>