<?php 	

	require("functions.php");
	
	
	$masha = getMasha();
	$spot = getSpot();
	$argentiina = getArgentiina();


?>

<h1>RestauranK</h1>
<p>
	<h2>Tere tulemast!<h2> 
</p>
<!DOCTYPE html>
<html>
	
		
	<head>
		<title>Data leht</title>
	</head>
	<body>
<!-- joosep/ Lisasin siia prooviks asjad-->
		<font size="3"'." face='Times New Roman'>  <!--joosep/ Lisasin siia prooviks selle rea-->
		
			<br><br>
			
			<a  href="login.php" > <button>Logi sisse/Registreeru</button></a>
		

		
	

	

	
	</body>
</html>

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