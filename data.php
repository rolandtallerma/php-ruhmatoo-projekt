<?php 	

	require("functions.php");
	
	
	$masha = getMasha();
	$spot = getSpot();
	$argentiina = getArgentiina();


?>

<h1>R e s t a u R a n k</h1>
<p>
	<h2>Tere tulemast!<h2> 
</p>
<!DOCTYPE html>
<html>
<body style="background-color:lightskyblue;">
	
		
	<head>
		<title>Data leht</title>
	</head>
	<body>
<!-- joosep/ Lisasin siia prooviks asjad-->
		<font size="3"'." face='Times New Roman'>  <!--joosep/ Lisasin siia prooviks selle rea-->
		
			<br><br>
			
			<a  href="login.php"><button>Logi sisse/Registreeru</button></a>
		
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
		
	

	

	
	</body>
</html>




<p>
	<h3>MASHA<h3> 
</p>
<?php
	$html = "<table>";
		$html .= "<tr>";
			$html .= "<th>id</th>";
			$html .= "<th>nimi</th>";
			$html .= "<th>tagasiside</th>";
		$html .="</tr>";
		
		
		
		
		
	
	foreach ($masha as $mashik) {
			
		$html .= "<tr>";
			$html .= "<td>".$mashik->id."</th>";
			$html .= "<td>".$mashik->nimi."</th>";
			$html .= "<td>".$mashik->tagasiside."</th>";

			
		$html .="</tr>";
		
	}
	
	$html .="</table>";

	echo $html;
?>
<p>
<br>
	<h3>ARGENTIINA<h3> 
</p>

<?php	
		$html = "<table>";
		
	
		$html .= "<tr>";
			$html .= "<th>id</th>";
			$html .= "<th>nimi</th>";
			$html .= "<th>tagasiside</th>";
		$html .="</tr>";
		
		
		
		
	
	foreach ($argentiina as $argik) {
			
		$html .= "<tr>";
			$html .= "<td>".$argik->id."</th>";
			$html .= "<td>".$argik->nimi."</th>";
			$html .= "<td>".$argik->tagasiside."</th>";

			
		$html .="</tr>";
		
	}
	

	$html .="</table>";

	echo $html;
	
?>
<p>
<br>
	<h3>SPOT<h3> 
</p>

<?php

			$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<th>id</th>";
			$html .= "<th>nimi</th>";
			$html .= "<th>tagasiside</th>";
		$html .="</tr>";
		
		
		
		
	
	foreach ($spot as $spotik) {
			
		$html .= "<tr>";
			$html .= "<td>".$spotik->id."</th>";
			$html .= "<td>".$spotik->nimi."</th>";
			$html .= "<td>".$spotik->tagasiside."</th>";

			
		$html .="</tr>";
		
	}
	
	$html .="</table>";

	echo $html;
	
	
?>