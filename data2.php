<?php
	require("functions.php");
	if (isset($_GET["logout"])) {
		session_destroy();
		header("Location: data.php");
	}
?>
<!DOCTYPE html>
<html>
	
	<head>
	<title>Data2 leht</title>
		  <font size="3"'." face='Times New Roman'>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>	
		<style>
			button {
				font-size: 15px;
			}
			h1 {
				font-size: 24px;
			}
			select.first {
				font-size: 24px;
			}
		</style>
	<body>

			<br><br>
			
			<a href="?logout=1"><button>Logi välja</button></a>

			
<br><br>   
	<!--/joosep Lisasin siia prooviks siit vahemikust-->


<br><br>	
<!--/joosep  siiani-->  
  <h1> Vali linn</h>
		<br><br>
		
		<select class="first">
	<option value="TLL">Tallinn</option>
	
	
</select>
	<button type="button" class="btn btn-primary btn-sm">Vali</button> <!--joosep/ Lisasin siia prooviks selle rea-->
	
<br><br>

	    <h1> Vali Söögikoht</h1>
		<br><br>
		
		<select class="first">
	<option value="KAHT">Korsten, Armastus & Hea Toit </option>
	<option value="LBRA">Leib Resto ja Aed</option>
	<option value="MSHA">Masha</option>
	<option value="ARGE">Argentiina</option>
	<option value="SPOT">Spot</option>
	<option value="CULC">Cubanita Live Cafe</option>
	<option value="VLJ">Lusikas</option>
	<option value="PLTZ">Platz</option>
	
	
</select>
	<button type="button" class="btn btn-primary btn-sm">Vali</button> <!--joosep/ Lisasin siia prooviks selle rea-->
	

	

	

	
	</body>
</html>