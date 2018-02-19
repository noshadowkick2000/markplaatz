

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
      <img class="mx-auto" width="400" src="res/logo2.png">
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
      <div class="alert alert-danger">
        <strong>Pas op! </strong>Deel uw informatie nooit met derden.
      </div>
      <h2>Account Aanmaken</h2>
      <br>
      
      <form action="/accCreate.php">
      <h5>Algemene Informatie</h5>
        <div class="form-group">
          <label for="name">Voorletter(s) </label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="lastName">Achternaam </label>
          <input type="text" class="form-control" id="lastName">
        </div>
        <div class="form-group">
          <label for="postcode">Postcode </label>
          <input type="text" class="form-control" id="postcode pst-num">
          <input type="text" class="form-control" id="postcode pst-char">
        </div>

        <h5>Accountinformatie</h5>
        <div class="form-group">
          <label for="email">Emailadres* </label>
          <input type="email" class="form-control" id="email">
        </div>
         <div class="form-group">
          <label for="usr">Gebruikersnaam* </label>
          <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
          <label for="pwd">Wachtwoord* </label>
          <input type="password" class="form-control" id="pwd">
        </div>
        <button type="submit" class="btn btn-danger">Account Aanmaken</button>
      </form>
    </div>

  	
  </body>
</html>