<?php
	require("functions.php");
	if (isset($_GET["logout"])) {
		session_destroy();
		header("Location: data.php");
	}

	if (isset($_GET["masha"])) {
		header("Location: masha.php");
	}
	
	if (isset($_GET["argentiina"])) {
		header("Location: argentiina.php");
	}
	if (isset($_GET["spot"])) {
		header("Location: spot.php");
	}

?>

<h1 style="font-family:Times New Roman;">R e s t a u R a n k</h1>
<h2 style="font-family:Times New Roman;">TERE TULEMAST!</h2>
<br><br>
<h3 style="font-family:Times New Roman;">Vali sobiv söögikoht:</h3> 
<!DOCTYPE html>
<html>
<body style="background-color:lightskyblue;">
	
		
	<head>
		<title>Data2 leht</title>
		
		
		
	</head>
	<body>
<!-- joosep/ Lisasin siia prooviks asjad-->
		<font size="3"'." face='Times New Roman'>  <!--joosep/ Lisasin siia prooviks selle rea-->
		
			
			
			
			
			

			
<br><br>   
	<!--/joosep Lisasin siia prooviks siit vahemikust-->
	<head>
  <font size="3"'." face='Times New Roman'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>	


    <a  href="?masha=1"><button> Masha</button></a>
	<a  href="?spot=1"><button> Spot</button></a>
	<a  href="?argentiina=1"><button> Argentiina</button></a>
	
	
	

	<p>
	<br><br>  
	
	<a  href="?logout=1"><button> Logi välja</button></a>

	
	</body>




</html>
