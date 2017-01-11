<?php 

	require("functions.php");
	if(!isset ($_SESSION["userId"])) {
		header("Location: login.php");
		exit();
	}
	if (isset($_GET["logout"])) {
		session_destroy();

		header("Location: login.php");
		exit();
	}
	
	if (	isset($_POST["nimi"]) && 
			isset($_POST["tagasiside"]) && 
			!empty($_POST["nimi"]) && 
			!empty($_POST["tagasiside"]) 
	) {
		
		$nimi = cleanInput($_POST["nimi"]);
		$tagasiside = cleanInput($_POST["tagasiside"]);
		
		Masha($_POST["nimi"], $_POST["tagasiside"]);
		
	}
	$mashad = getMasha();
	//echo "<pre>";
	//var_dump($notes);
	//echo "</pre>";

?>