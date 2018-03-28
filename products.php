

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
			<form class="form" action="/searchstuff.php">
				<input class="form-control mr-sm-2" type="text" placeholder="zoek naar een artikel">
				<br>
				<h5>Categorie</h5>
				<label class="form-check-label"> <input type="checkbox" class="form-check-input" value="">Antiek en Kunst</label>
				<br>
				<label class="form-check-label"> <input type="checkbox" class="form-check-input" value="">Verzorging</label>
				<br>
				<label class="form-check-label"> <input type="checkbox" class="form-check-input" value="">Boeken</label>
				<br>
				<label class="form-check-label"> <input type="checkbox" class="form-check-input" value="">Films en Muziek</label>
				<br>
				<label class="form-check-label"> <input type="checkbox" class="form-check-input" value="">Gaming</label>
				<br>
				<label class="form-check-label"> <input type="checkbox" class="form-check-input" value="">Auto's</label>
				<br>
				<label class="form-check-label"> <input type="checkbox" class="form-check-input" value="">Fietsen</label>
				<br>
				<label class="form-check-label"> <input type="checkbox" class="form-check-input" value="">Trekkers</label>
				<br>
				<button class="btn btn-success" type="submit">Zoeken</button>
			</form>
		</div>
		<div class="col-sm-6">
			<H3>Resultaten</H3> 
          <div class="table-responsive-xl" style="overflow-x:auto;">
          <table class="table">
           
            <tbody>
              <tr>
                <th>
                  <div class="card" style="width:170px;">
                    <div class="card-header"><h6 class="card-title">John Deere 6320</h6></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"></div>
                    <div class="card-footer">
                      <form action="article.php"  style="width:50px;">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
                  </div>
                </th>
				<th>
                  <div class="card" style="width:170px;">
                    <div class="card-header"><h6 class="card-title">John Deere 6320</h6></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"></div>
                    <div class="card-footer">
                      <form action="article.php"  style="width:50px;">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
                  </div>
                </th>
				<th>
                  <div class="card" style="width:170px;">
                    <div class="card-header"><h6 class="card-title">John Deere 6320</h6></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"></div>
                    <div class="card-footer">
                      <form action="article.php"  style="width:50px;">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
                  </div>
                </th>
              </tr>
            </tbody>
          </table>   
          </div>


		</div>
		
		<div class="col-sm-3"> <!--TRENDING-->
		<H3 class="">Trending</H3> 
			<div class="table"  style="overflow-x:auto;">
			<table class="table">
           
			<tbody>
			
              <tr>
                <th>
                  <div class="card" style="width:170px;">
                    <div class="card-header"><h6 class="card-title">John Deere 6320</h6></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"></div>
                    <div class="card-footer">
                      <form action="article.php"  style="width:50px;">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
                  </div>
                </th>
              </tr>
			  
			  <tr>
                <th>
                  <div class="card" style="width:170px;">
                    <div class="card-header"><h6 class="card-title">John Deere 6320</h6></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"></div>
                    <div class="card-footer">
                      <form action="article.php"  style="width:50px;">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
                  </div>
                </th>
              </tr>
			  
			  <tr>
                <th>
                  <div class="card" style="width:170px;">
                    <div class="card-header"><h6 class="card-title">John Deere 6320</h6></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"></div>
                    <div class="card-footer">
                      <form action="article.php"  style="width:50px;">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
                  </div>
                </th>
              </tr>
			  
			  <tr>
                <th>
                  <div class="card" style="width:170px;">
                    <div class="card-header"><h6 class="card-title">John Deere 6320</h6></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"></div>
                    <div class="card-footer">
                      <form action="article.php"  style="width:50px;">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
                  </div>
                </th>
              </tr>
			  
			  <tr>
                <th>
                  <div class="card" style="width:170px;">
                    <div class="card-header"><h6 class="card-title">John Deere 6320</h6></div>
                    <div class="card-body"><img class="card-img-top" src="res/test-img.png"></div>
                    <div class="card-footer">
                      <form action="article.php"  style="width:50px;">
                        <input class="btn btn-danger" type="submit" value="Artikel bekijken"/>
                      </form>
                    </div>
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
</html>
