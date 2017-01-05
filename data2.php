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
	
	<br><br>
	
				
	
	<input type="submit" value="Jäta Tagasiside">

</form>





<h2 style="clear:both;">Arvamused</h2>




