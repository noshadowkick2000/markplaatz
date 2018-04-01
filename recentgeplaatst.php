<!DOCTYPE html>
<html lang="en">
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
  </head>

  <body>
  	<?php
  		$servername = "azura.ga";
		$username = "mark";
		$password = "jd6320";
		$dbname = "markplaatz";

		$conn = mysqli_connect('azura.ga', $username, $password, $dbname);


		for($x = 0; $x <= 4; $x++){
			$sql = "SELECT * FROM aanbieding ORDER BY AanbiedingID DESC LIMIT 1 OFFSET $x";
			$query = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_assoc($query)){
				$recent[$x]['ct'] = $row['NaamAanbieding'];
				$recent[$x]['b'] = $row['Beschrijving'];
				$recent[$x]['p'] = $row['Prijs'];
				$recent[$x]['id'] = $row['AanbiedingID'];
				
			}

		}
		mysqli_close($conn);


		echo '<div class="table-responsive-xl" style="overflow-x:auto;">
          <table class="table">
           
            <tbody>
              <tr>
                <th>
                  <div class="card" style="width:200px; height:500px;" >
                    <div class="card-header"><h4 class="card-title" id="ct1"> '.$recent[0]['ct'].' </h4></div>
                     <div class="card-body"><img class="card-img-top" src="prodimg/'.$recent[0]['id'].'.jpg" id="img1"><br><br><p class="card-text" id="p1">'.$recent[0]['b'].'</p></div>
                    <div class="card-footer">
                      <form action="article.php?id='.$recent[0]['id'].'">
						<a href="article.php?id='.$recent[0]['id'].'">Aanbieding bekijken</a>
                      </form>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px; height:500px;">
                    <div class="card-header"><h4 class="card-title" id="ct2"> '.$recent[1]['ct'].'</h4></div>
                    <div class="card-body" ><img class="card-img-top" src="prodimg/'.$recent[1]['id'].'.jpg" id="img2"><br><br><p class="card-text" id="p1">'.$recent[1]['b'].'</p></div>
                    <div class="card-footer">
				
						<a href="article.php?id='.$recent[1]['id'].'">Aanbieding bekijken</a>
                    
					</div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px; height:500px;">
                    <div class="card-header"><h4 class="card-title" id="ct3">'.$recent[2]['ct'].'</h4></div>
                    <div class="card-body"><img class="card-img-top" src="prodimg/'.$recent[2]['id'].'.jpg" id="img3"><br><br><p class="card-text" id="p3">'.$recent[2]['b'].'</p></div>
                    <div class="card-footer">
					
						<a href="article.php?id='.$recent[2]['id'].'">Aanbieding bekijken</a>
                     
					</div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px; height:500px;">
                    <div class="card-header"><h4 class="card-title" id="ct4">'.$recent[3]['ct'].'</h4></div>
                    <div class="card-body"><img class="card-img-top" src="prodimg/'.$recent[3]['id'].'.jpg" id="img4"><br><br><p class="card-text" id="p4">'.$recent[3]['b'].'</p></div>
                    <div class="card-footer">
						<a href="article.php?id='.$recent[3]['id'].'">Aanbieding bekijken</a>
					 </div>
                  </div>
                </th>
                <th>
                  <div class="card" style="width:200px; height:500px;">
                    <div class="card-header"><h4 class="card-title" id="ct5">'.$recent[4]['ct'].'</h4></div>
                    <div class="card-body"><img class="card-img-top" src="prodimg/'.$recent[4]['id'].'.jpg" id="img5"><br><br><p class="card-text" id="p5">'.$recent[4]['b'].'</p></div>
                    <div class="card-footer">
						<a href="article.php?id='.$recent[4]['id'].'">Aanbieding bekijken</a>
                      
					 </div>
                  </div>
                </th>

              </tr>

            </tbody>
          </table>   
          </div>
		';
  	?>
  	
  </body>
</html>
