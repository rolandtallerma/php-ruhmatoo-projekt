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
				
				header("Location: data.php");
				exit();
			} else {
				$notice = "Vale parool!";
			}
			
		} else {

			$notice = "Sellist emaili ei ole!";
		}
		
		return $notice;
	}
?>