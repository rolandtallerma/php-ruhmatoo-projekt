<?php

if (isset($_GET["logout"])) {
		
		session_destroy();
		
		header("Location: data.php");
		exit();
	}

?>
<!DOCTYPE html>
<html>
	
		
	<head>
		<title>Data2 leht</title>
		
		
		
	</head>
	<body>

		
			<br><br>
			
			<a href="?logout=1"><button>Logi välja</button></a>

			
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
	<option value="KVÕ•">Kiviõli</option>
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