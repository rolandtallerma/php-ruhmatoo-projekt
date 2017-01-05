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
	function soogikohad($soogikoht, $arvamus) {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);

		$stmt = $mysqli->prepare("INSERT INTO soogikohad (soogikoht, arvamus) VALUES (?, ?)");
		echo $mysqli->error;
		
		$stmt->bind_param("ss", $soogikoht, $arvamus );

		if ( $stmt->execute() ) {
			echo "salvestamine õnnestus";	
		} else {	
			echo "ERROR ".$stmt->error;
	}
	
	
	
	function getAllNotes() {
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"],  $GLOBALS["serverPassword"],  $GLOBALS["database"]);

		$stmt = $mysqli->prepare("
			SELECT id, soogikoht, arvamus
			FROM soogikohad
			WHERE deleted IS NULL
		");
		
		$stmt->bind_result($id, $soogikoht, $arvamus);
		$stmt->execute();
		
		$result = array();
		
		// tsükkel töötab seni, kuni saab uue rea AB'i
		// nii mitu korda palju SELECT lausega tuli
		while ($stmt->fetch()) {
			//echo $note."<br>";
			
			$object = new StdClass();
			$object->id = $id;
			$object->soogikoht = $soogikoht;
			$object->arvamus = $arvamus;
			
			
			array_push($result, $object);
			
		}
		
		return $result;
		
	}
	}
	
	
	
	
	
	
	
?>