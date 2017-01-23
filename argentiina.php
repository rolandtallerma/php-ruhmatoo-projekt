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


<h1 style="font-family:Times New Roman;">Argentiina</h1>
<body style="background-color:lightskyblue;">
<p>
	<a  href="?logout=1" value="Logi välja"><button> Logi välja</button></a>
<br><br>
</p>
<h2 style="font-family:Times New Roman;"><i>Tagasiside</i></h2>
<form method="POST">
			
	<label style="font-family:Times New Roman;">Nimi</label><br>
	<input name="nimi" type="text">
	
	<br><br>
	
	<label style="font-family:Times New Roman;">Tagasiside</label><br>
	<input name="tagasiside" type="text" input style="height:200px">
				
	<br><br>
	
	<a  href="submit" value="Saada tagasiside"><button> Saada tagasiside</button></a>
	
	<a href="javascript:history.go(-1)">Tagasi</a>

	<font size="3"'." face='Times New Roman'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  </form>

</form>