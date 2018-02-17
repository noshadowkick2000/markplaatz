

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
  	<div id="navi" class="container">
      <img class="mx-auto" width="400" src="res/logo2.png">
  		<nav class="navbar navbar-expand-sm sticky-top" style="background-color:#191818; border-radius:0.5vw;">
        <style>
                a{
                  color:white;
                }
              </style>
         <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Aanbiedingen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Producten</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="#">MijnMarktplaatz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>     
      </nav>
  	</div>
	  

<br><br>
    <div class="container">
      <div class="alert alert-danger">
        <strong>Pas op! </strong>Geef uw informatie nooit door aan derden.
      </div>
      <h2>Inloggen</h2>
     
      <form action="">
        <div class="form-group">
          <label for="email">Emailadres </label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="email">Wachtwoord </label>
          <input type="password" class="form-control" id="pwd">
        </div>
        <button type="submit" class="btn btn-danger">Log in</button>
        Nog geen account? <a href="createaccount.php" style="color:blue">Maak hier een account aan</a>
      </form>
    </div>

  	
  </body>
</html>