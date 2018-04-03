

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
      <a href="index.php"><img class="mx-auto d-block" height="150" src="res/Market-Logo.png"></a>
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
            <a class="nav-link" href="login.php" id="login">Login</a>
          </li>
  			</ul> 		
  		</nav>
  		
  	</div> 

<br><br>
    <div class="container">
      <div class="alert alert-danger">
        <strong>Pas op! </strong>Deel uw informatie nooit met derden.
      </div>
      <h2>Account Bewerken</h2>
      <br>
      
      <form action="bewerkaccountsql.php" method="post">
      
      <h5>Accountinformatie</h5>

        <div class="form-group">
          <label for="email">Emailadres* </label>
          <input type="email" class="form-control" id="email" name="em">
		  <?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT Email FROM akkount WHERE Username='" . $usrn . "'";
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
						$mail = "";
						}else{
						$mail = $res;
						}
						
						$conn->close();
						
		?>
		<script>
		var email = "<?= $mail;?>";		
		document.getElementById("email").value = email;
		</script>
        </div>
		<div class="form-group">
          <input type="hidden" class="form-control" id="usr" name="un">
		  <script>document.getElementById("usr").value = usrn;</script>
        </div>
        <div class="form-group">
          <label for="pwd">Wachtwoord* </label>
          <input type="password" class="form-control" id="pwd" name="pswd">
		  <?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT wachtwoord FROM akkount WHERE Username='" . $usrn . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["wachtwoord"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$pwd = "";
						}else{
						$pwd = $res;
						}
						
						$conn->close();
						
		?>
		<script>
		var pwd = "<?= $pwd;?>";		
		document.getElementById("pwd").value = pwd;
		</script>
        </div>


        <h5>Algemene Informatie</h5>
		
		<div class="form-group">
          <label for="street">Korte omschrijving </label>
          <input type="text" class="form-control" id="bio" name="bio">
		  <?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT beschrijvinglang FROM akkount WHERE Username='" . $usrn . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["beschrijvinglang"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$bio = "";
						}else{
						$bio = $res;
						}
						
						$conn->close();
						
		?>
		<script>
		var bio = "<?= $bio;?>";		
		document.getElementById("bio").value = bio;
		</script>
        </div>
		
        <div class="form-group">
          <label for="street">Straatnaam </label>
          <input type="text" class="form-control" id="street" name="street">
		  <?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT straat FROM akkount WHERE Username='" . $usrn . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["straat"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$straat = "";
						}else{
						$straat = $res;
						}
						
						$conn->close();
						
		?>
		<script>
		var straat = "<?= $straat;?>";		
		document.getElementById("street").value = straat;
		</script>
        </div>

        <div class="form-group">
          <label for="sNum">Huisnummer </label>
          <input type="text" class="form-control" id="sNum" name="sn">
		  <?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT huisnummer FROM akkount WHERE Username='" . $usrn . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["huisnummer"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$snum = "";
						}else{
						$snum = $res;
						}
						
						$conn->close();
						
		?>
		<script>
		var snum = "<?= $snum;?>";		
		document.getElementById("snum").value = snum;
		</script>
        </div>

        <div class="form-group">
          <label for="postcode">Postcode </label>
          <input type="text" class="form-control" id="postcode pst-num" name="pcc">
		  <?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT postcodenum FROM akkount WHERE Username='" . $usrn . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["postcodenum"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$pcnum = "";
						}else{
						$pcnum = $res;
						}
						
						$conn->close();
						
		?>
		<script>
		var pcnum = "<?= $pcnum;?>";		
		document.getElementById("postcode pst-num").value = pcnum;
		</script>
          <input type="text" class="form-control" id="postcode pst-char" name="pcl">
		  <?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT postcodelt FROM akkount WHERE Username='" . $usrn . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["postcodelt"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$pclt = "";
						}else{
						$pclt = $res;
						}
						
						$conn->close();
						
		?>
		<script>
		var pclt = "<?= $pclt;?>";		
		document.getElementById("postcode pst-char").value = pclt;
		</script>
        </div>

        <div class="form-group">
          <label for="woonplaats">Woonplaats </label>
          <input type="text" class="form-control" id="woonplaats" name="wp">
		  <?php
						$servername = "azura.ga";
						$username = "mark";
						$password = "jd6320";
						$dbname = "markplaatz";

						// Create connection

						$conn = new mysqli($servername, $username, $password, $dbname);
						
						$sql = "SELECT woonplaats FROM akkount WHERE Username='" . $usrn . "'";
						$loc = $conn->query($sql);
						
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						$res = $row["woonplaats"];
						}
						} else {
						$res = "";
						}
						
						if ($res == NULL){
						$woon = "";
						}else{
						$woon = $res;
						}
						
						$conn->close();
						
		?>
		<script>
		var woon = "<?= $woon;?>";		
		document.getElementById("woonplaats").value = woon;
		</script>
        </div>

       
        <button type="submit" class="btn btn-danger">Account Bijwerken</button>
      </form>
    </div>

  	
  </body>
</html>