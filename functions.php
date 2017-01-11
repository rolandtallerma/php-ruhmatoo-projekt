<?php 
	require("../../config2.php");
	session_start(); 
	$database = "if16_paulvase_3";
	function signup($email, $password) {
		$mysqli = new mysqli(
		$GLOBALS["serverHost"], 
		$GLOBALS["serverUsername"],  
		$GLOBALS["serverPassword"],  
		$GLOBALS["database"]
		);
		$stmt = $mysqli->prepare("INSERT INTO phpkasutajad (email, password) VALUES (?, ?)");
		echo $mysqli->error;
		$stmt->bind_param("ss", $email, $password );
		if ( $stmt->execute() ) {
			echo "salvestamine õnnestus";	
		} else {	
			echo "ERROR ".$stmt->error;
		}
		
		}
	function login($email, $password) {
		$notice = "";
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);
		$stmt = $mysqli->prepare("
			SELECT id, email, password, created
			FROM phpkasutajad
			WHERE email = ?
		");

		$stmt->bind_param("s", $email);
		$stmt->bind_result($id, $emailFromDb, $passwordFromDb, $created);
		$stmt->execute();
		if ($stmt->fetch()) {
			
			$hash = hash("sha512", $password);
			if ($hash == $passwordFromDb) {

				echo "Kasutaja ".$id." logis sisse";
				
				$_SESSION["userId"] = $id;
				$_SESSION["userEmail"] = $emailFromDb;
				
				header("Location: data2.php");
				exit();
			} else {
				$notice = "Vale parool!";
			}
			
		} else {

			$notice = "Sellist emaili ei ole!";
		}
		
		return $notice;
		}
	function Masha($nimi, $tagasiside) {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);

		$stmt = $mysqli->prepare("INSERT INTO Masha (nimi, tagasiside) VALUES (?, ?)");
		echo $mysqli->error;
		
		$stmt->bind_param("ss", $nimi, $tagasiside );

		if ( $stmt->execute() ) {
			echo "salvestamine õnnestus";	
		} else {	
			echo "ERROR ".$stmt->error;
		}
		}
	function Spot($nimi, $tagasiside) {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);

		$stmt = $mysqli->prepare("INSERT INTO Spot (nimi, tagasiside) VALUES (?, ?)");
		echo $mysqli->error;
		
		$stmt->bind_param("ss", $nimi, $tagasiside );

		if ( $stmt->execute() ) {
			echo "salvestamine õnnestus";	
		} else {	
			echo "ERROR ".$stmt->error;
	
		}
		}
	function Argentiina($nimi, $tagasiside) {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);

		$stmt = $mysqli->prepare("INSERT INTO Argentiina(nimi, tagasiside) VALUES (?, ?)");
		echo $mysqli->error;
		
		$stmt->bind_param("ss", $nimi, $tagasiside );

		if ( $stmt->execute() ) {
			echo "salvestamine õnnestus";	
		} else {	
			echo "ERROR ".$stmt->error;
	
		}
		}
	function getMasha() {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);

		$stmt = $mysqli->prepare("
			SELECT id, nimi, tagasiside
			FROM Masha
			Where deleted IS NULL
		");
		
		$stmt->bind_result($id, $nimi, $tagasiside);
		$stmt->execute();
		
		$result = array();
		
		while ($stmt->fetch()) {
			//echo $note."<br>";
			
			$object = new StdClass();
			$object->id = $id;
			$object->nimi = $nimi;
			$object->tagasiside = $tagasiside;
			
			array_push($result, $object);
			
		}
		
		return $result;
		
	}
	
	
	function getSpot() {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);

		$stmt = $mysqli->prepare("
			SELECT id, nimi, tagasiside
			FROM Spot
			Where deleted IS NULL
		");
		
		$stmt->bind_result($id, $nimi, $tagasiside);
		$stmt->execute();
		
		$result = array();
		
		while ($stmt->fetch()) {
			//echo $note."<br>";
			
			$object = new StdClass();
			$object->id = $id;
			$object->nimi = $nimi;
			$object->tagasiside = $tagasiside;
			
			array_push($result, $object);
			
		}
		
		return $result;
		
	}
	
	function getArgentiina() {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);

		$stmt = $mysqli->prepare("
			SELECT id, nimi, tagasiside
			FROM Argentiina
			Where deleted IS NULL
		");
		
		$stmt->bind_result($id, $nimi, $tagasiside);
		$stmt->execute();
		
		$result = array();
		
		while ($stmt->fetch()) {
			//echo $note."<br>";
			
			$object = new StdClass();
			$object->id = $id;
			$object->nimi = $nimi;
			$object->tagasiside = $tagasiside;
			
			array_push($result, $object);
			
		}
		
		return $result;
		
	}
	
	function cleanInput($input) {
		$input = trim($input);
		$input = stripslashes($input);
		$input = htmlspecialchars($input);
		return $input;
		
		
		}
		
		
		
		
		
		
		
		
	
	
	
	
	
	
	
	
?>