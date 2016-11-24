<?php

if (isset($_GET["logout"])) {
		
		session_destroy();
		
		header("Location: data.php");
		exit();
	}

?>



<!DOCTYPE html>
<html>
	
		
	<head>
		<title>Data2 leht</title>
	</head>
	<body>

		
			<br><br>
			
			<input type="submit" value ="Logi välja">
</html>	