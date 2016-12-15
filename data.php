<?php 	
	$signupEmailError = "";
	$signupEmail = "";
		
	if (isset ($_POST["signupEmail"])) {
				
		if (empty ($_POST["signupEmail"])) {
			
			$signupEmailError = "See väli on kohustuslik";
			
		} else {
						
			$signupEmail = $_POST["signupEmail"];
		}
		
	}
	
	$signupPasswordError = "";
	
	if (isset ($_POST["signupPassword"])) {
		
		if (empty ($_POST["signupPassword"])) {
			
			$signupPasswordError = "See väli on kohustuslik";
			
		} else {
			
			
			if (strlen ($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tm pikk";
				
			}
			
		}
		
	}
	
	
	$gender = "";
	if(isset($_POST["gender"])) {
		if(!empty($_POST["gender"])){
						
			$gender = $_POST["gender"];
		}
	}
	
	
	
	if ( isset($_POST["signupEmail"]) &&
		 isset($_POST["signupEmail"]) &&
	     $signupEmailError == "" &&
	     empty($signupPasswordError)
        )	
		{
				
		echo "salvestan...<br>";
		echo "email ".$signupEmail."<br>";
		echo "parool ".$_POST["signupPassword"]."<br>"; 
		
		$password = hash("sha512", $_POST["signupPassword"]);
		
		echo "räsi ".$password."<br>"; 
		
		signup($signupEmail, $password);
	
	}
	$notice = "";
	
	if (   isset($_POST["loginEmail"])  &&
	       isset($_POST["loginPassword"])  &&
	       !empty($_POST["loginEmail"])  &&
	       !empty($_POST["loginPassword"]) 
	 ){
	   $notice = login($_POST["loginEmail"], $_POST["loginPassword"]);
	
	}
	
	
	
?>
<!DOCTYPE html>
<html>
	
		
	<head>
		<title>Data leht</title>
	</head>
	<body>
<!-- joosep/ Lisasin siia prooviks asjad-->
		<font size="3"'." face='Arial'>  <!--joosep/ Lisasin siia prooviks selle rea-->
		
			<br><br>
			
			<a  href="login.php" > <button>Logi sisse/Registreeru</button></a>
		
	


	<br><br>   
	<!--/joosep Lisasin siia prooviks siit vahemikust-->
	<head>
  <font size="2"'." face='Arial'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>	

<br><br>	
<!--/joosep  siiani-->  		
	    <h1> Vali linn</h>
		<br><br>
		
		<select>
	<option value="TLL">Tallinn</option>

	
</select>
	<button type="button" class="btn btn-primary">Vali</button> <!--joosep/ Lisasin siia prooviks selle rea-->
	
<br><br>

	    <h1> Vali Söögikoht</h>
		<br><br>
		
		<select>
	<option value="KAHT">Korsten, Armastus & Hea Toit </option>
	<option value="LBRA">Leib Resto ja Aed</option>
	<option value="MSHA">Masha</option>
	<option value="ARGE">Argentiina</option>
	<option value="SPOT">Spot</option>
	<option value="CULC">Cubanita Live Cafe</option>
	<option value="VLJ">Lusikas</option>
	<option value="PLTZ">Platz</option>
	
	
</select>
	<button type="button" class="btn btn-primary">Vali</button> <!--joosep/ Lisasin siia prooviks selle rea-->
	

	

	

	
	</body>
</html>