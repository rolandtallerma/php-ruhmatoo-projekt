<?php 
	// et saada ligi sessioonile
	require("functions.php");
	if(!isset ($_SESSION["userId"])) {
		header("Location: data.php");
		exit();
	}
	
	//kas kasutaja tahab välja logida
	// kas aadressireal on logout olemas
	if (isset($_GET["logout"])) {
		session_destroy();
		header("Location: data.php");
		exit();
	}
	

	if (	isset($_POST["arvamus"]) && 
			!empty($_POST["arvamus"])
	) {
		
		$note = $Helper->cleanInput($_POST["arvamus"]);
		
		$Note->saveNote($arvamus);
		
	}

?>

<h1>Data</h1>
<p>
	Tere tulemast <a href="user.php"><?=$_SESSION["userEmail"];?></a>!
	<a href="?logout=1">Logi välja</a>
</p>
<h2><i>Märkmed</i></h2>
<h2>&lt;i&gt;Märkmed&lt;/i&gt;</h2>
<form method="POST">
			
	<label>Märkus</label><br>
	<input name="note" type="text">
=======
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
>>>>>>> e85dea9ca7279e1a15b0975fda9e6a613249b824
	
	<br><br>
	
				
	
	<input type="submit" value="Jäta Tagasiside">

</form>





<h2 style="clear:both;">Arvamused</h2>

<<<<<<< HEAD
=======
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
	
>>>>>>> e85dea9ca7279e1a15b0975fda9e6a613249b824



