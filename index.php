

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
  			<strong>Melding </strong>.....
  		</div>
  	</div>
	

    <div class="container">
      <div class="row">
        <div class="col-sm-3"> 
          <nav class="navbar" style="background-color:#191818; border-radius:0.5vw;">

            <!-- Links -->
            <ul class="navbar-nav" style="color:white;">
              <style>
                a{
                  color:white;
                }
              </style>

              <li><h4 style="color:#EF5007">Groepen</h4></li>
              <li><a href="#">Antiek en Kunst</a></li>
              <li><a href="#">Verzorging</a></li>

              <li style="color:#EF5007"><b>Vrije tijd</b></li>
              <li><a href="#">Boeken</a></li>
              <li><a href="#">Films en Muziek</a></li>
              <li><a href="#">Gaming</a></li>

              <li style="color:#EF5007"><b>Op de weg</b></li>
              <li><a href="#">Auto's</a></li>
              <li><a href="#">Fietsen</a></li>
              <li><a href="#">Trekkers</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-8">

          <H3>Recent geplaatst</H3>
          <div class="table-responsive-xl" style="overflow-x:auto;">
          <table class="table">
           
            <tbody>
              <tr>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">John Deere 6320</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer">
                      <form action="article.php">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">Artikel</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">Artikel</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">Artikel</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">Artikel</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>

              </tr>

            </tbody>
          </table>   
          </div>



          <H3>Aanbevolen voor u</H3>
          <div class="table-responsive-xl" style="overflow-x:auto;">
          <table class="table">
           
            <tbody>
              <tr>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">John Deere 6320</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">Artikel</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">Artikel</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">Artikel</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px">
                    <div class="card-header"><h4 class="card-title">Artikel</h4></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"><br><br><p class="card-text">Helemaal goed</p></div>
                    <div class="card-footer"><button type="button" class="btn btn-danger">Artikel bekijken</button></div>
                  </div>
                </th>

              </tr>

            </tbody>
          </table>   
          </div>
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
    
    

</html>