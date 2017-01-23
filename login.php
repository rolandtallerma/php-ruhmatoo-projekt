<?php
	require("functions.php");
	if(isset ($_SESSION["userId"])) {
		
	header("Location: data.php");
	exit();
	}
	$signupEmailError = "";
	$signupEmail = "";
	if (isset ($_POST["signupEmail"])) {
		if (empty ($_POST["signupEmail"])) {
			$signupEmailError = "See väli on kohustuslik";
		} else {
			$signupEmail = $_POST["signupEmail"];
		}	
	}
	$signupPasswordError = "";
	if (isset ($_POST["signupPassword"])) {
		if (empty ($_POST["signupPassword"])) {
			$signupPasswordError = "See väli on kohustuslik";
		} else {
			if (strlen ($_POST["signupPassword"]) < 8 ) {
				$signupPasswordError = "Parool peab olema vähemalt 8 tm pikk";
			}
		}
	}
	if ( isset($_POST["signupEmail"]) &&
		 isset($_POST["signupPassword"]) &&
		 $signupEmailError == "" && 
		 empty($signupPasswordError)
	   ) {
		
		echo "salvestan...<br>";
		echo "email ".$signupEmail."<br>";
		$password = hash("sha512", $_POST["signupPassword"]);
		signup($signupEmail, $password);
	}	
	
	
	$notice = "";
	if (	isset($_POST["loginEmail"]) && 
			isset($_POST["loginPassword"]) && 
			!empty($_POST["loginEmail"]) && 
			!empty($_POST["loginPassword"]) 
	) {
		$notice = login($_POST["loginEmail"], $_POST["loginPassword"]);
		
		if(isset($notice->success)){
			header("Location: login.php");
			exit();
		}else {
			$notice = $notice->error;
			var_dump($notice->error);
		}
		
	}
	





?>

<!DOCTYPE html>
<html>
<body style="background-color:lightskyblue;">
	<head>
		<title style="font-family:Times New Roman;">Sisselogimise leht</title>
	</head>
	<body>

		<h1 style="font-family:Times New Roman;">Logi sisse</h1>
		<p style="color:red;"><?php echo $notice; ?></p>
		<form method="POST">
			
			<label style="font-family:Times New Roman;">E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			
			<label style="font-family:Times New Roman;">Parool</label><br>
			<input name="loginPassword" type="password">
						
			<br><br>
			
			
			<a  href="submit" value="Logi sisse"><button> Logi sisse</button></a>
		
		</form>
		
				<h1 style="font-family:Times New Roman;">Loo kasutaja</h1>
		
		<form method="POST">
			
			<label style="font-family:Times New Roman;">E-post</label><br>
			<input name="signupEmail" type="email" value="<?=$signupEmail;?>" > <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input placeholder="Parool" name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
						
			<br><br>
			
			<a  href="submit" value="Loo kasutaja"><button> Loo kasutaja</button></a>
		
			
			 <font size="3"'." face='Times New Roman'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>	
			
			
</html>