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
		
		Argentiina($_POST["nimi"], $_POST["tagasiside"]);
		
	}
	$argentiina = getArgentiina();

?>


<h1>Argentiina</h1>
<p>
	Tere tulemast <a href="user.php"><?=$_SESSION["userEmail"];?></a>!
	<a href="?logout=1">Logi välja</a>
</p>
<h2><i>Tagasiside</i></h2>
<form method="POST">
			
	<label>Nimi</label><br>
	<input name="nimi" type="text">
	
	<br><br>
	
	<label>Tagasiside</label><br>
	<input name="tagasiside" type="text" input style="height:200px">
				
	<br><br>
	
	<input type="submit">
	
	<a href="javascript:history.go(-1)">Tagasi</a>

</form>