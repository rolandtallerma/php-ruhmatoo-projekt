<?php 
	
	$signupEmailError = "";
	$signupEmail = "";
		
	if (isset ($_POST["signupEmail"])) {
				
		if (empty ($_POST["signupEmail"])) {
			
			$signupEmailError = "See v�li on kohustuslik";
			
		} else {
						
			$signupEmail = $_POST["signupEmail"];
		}
		
	}
	
	$signupPasswordError = "";
	
	if (isset ($_POST["signupPassword"])) {
		
		if (empty ($_POST["signupPassword"])) {
			
			$signupPasswordError = "See v�li on kohustuslik";
			
		} else {
			
			
			if (strlen ($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema v�hemalt 8 tm pikk";
				
			}
			
		}
		
	}
	
	
	$gender = "";
	if(isset($_POST["gender"])) {
		if(!empty($_POST["gender"])){
						
			$gender = $_POST["gender"];
		}
	}
	
	
	
	if ( isset($_POST["signupEmail"]) &&
		 isset($_POST["signupEmail"]) &&
	     $signupEmailError == "" &&
	     empty($signupPasswordError)
        )	
		{
				
		echo "salvestan...<br>";
		echo "email ".$signupEmail."<br>";
		echo "parool ".$_POST["signupPassword"]."<br>"; 
		
		$password = hash("sha512", $_POST["signupPassword"]);
		
		echo "r�si ".$password."<br>"; 
		
		signup($signupEmail, $password);
	
	}
	$notice = "";
	
	if (   isset($_POST["loginEmail"])  &&
	       isset($_POST["loginPassword"])  &&
	       !empty($_POST["loginEmail"])  &&
	       !empty($_POST["loginPassword"]) 
	 ){
	   $notice = login($_POST["loginEmail"], $_POST["loginPassword"]);
	
	}
	
	
	
?>
<!DOCTYPE html>
<html>
	
		
	<head>
		<title>Data leht</title>
	</head>
	<body>

		
			<br><br>
			
			<input type="submit" value ="Logi sisse/Registreeru">
		
	


	<br><br>   
		
	    <h1> Vali linn</h>
		<br><br>
		
		<select>
	<option value="TLL">Tallinn</option>
	<option value="TRT">Tartu</option>
	<option value="VRU">Võru</option>
	<option value="PRN">Pärnu</option>
	<option value="NR">Narva</option>
	<option value="KJ">Kohtla-Järve</option>
	<option value="VLJ">Viljandi</option>
	<option value="RKR">Rakvere</option>
	<option value="SLM">Sillamäe</option>
	<option value="KRS">Kuressaare</option>
	<option value="VLG">Valga</option>
	<option value="JHI">Jõhvi</option>
	<option value="HPS">Haapsalu</option>
	<option value="KEI">Keila</option>
	<option value="PAI">Paide</option>
	<option value="TRI">Türi</option>
	<option value="TPA">Tapa</option>
	<option value="PLV">Põlva</option>
	<option value="KVÕ">Kiviõli</option>
	<option value="ELV">Elva</option>
	<option value="SAU">Saue</option>
	<option value="JGA">Jõgeva</option>
	<option value="RPL">Rapla</option>
	<option value="PLT">Põltsamaa</option>
	<option value="PLD">Paldiski</option>
	<option value="SND">Sindi</option>
	<option value="KND">Kunda</option>
	<option value="KRD">Kärdla</option>
	<option value="KRA">Kehra</option>
	<option value="LKS">Loksa</option>
	<option value="RPN">Räpina</option>
	<option value="TRV">Tõrva</option>
	<option value="NRJ">Narva-Jõesuu</option>
	<option value="TMS">Tamsalu</option>
	<option value="OTP">Otepää</option>
	<option value="KIL">Killingi-Nõmme</option>
	<option value="KNU">Karksi-Nuia</option>
	<option value="LIH">Lihula</option>
	<option value="MTV">Mustvee</option>
	<option value="VHM">Võhma</option>
	<option value="ANT">Antsla</option>
	<option value="ABP">Abja-Paluoja</option>
	<option value="PSS">Püssi</option>
	<option value="SRJ">Suure-Jaani</option>
	<option value="KLL">Kallaste</option>
	<option value="MSK">Mõisaküla</option>
	
</select>
	<input type="submit" value="vali">
	
<br><br>

	    <h1> Vali Söögikoht</h>
		<br><br>
		
		<select>
	<option value="KAHT">Korsten, Armastus & Hea Toit </option>
	<option value="LBRA">Leib Resto ja Aed</option>
	<option value="MSHA">Masha</option>
	<option value="ARGE">Argentiina</option>
	<option value="SPOT">Spot</option>
	<option value="CULC">Cubanita Live Cafe</option>
	<option value="VLJ">Lusikas</option>
	<option value="PLTZ">Platz</option>
	
	
</select>
	<input type="submit" value="vali">
	

	

	

	
	</body>
</html>