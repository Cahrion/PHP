<?php
	session_start();
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	<?php 		
	
	 // Burası Dizi kullanarak görüşü daha kolaylaştırma yöntemi
	
	
	$_SESSION["Kullanici"] = array("Adi" => "Icabi", "Soyadi" => "Kırgız", "EmailAdresi" => "icabikrz@gmail.com", "Telefon" => "0535 225 28 44");	
	
	$_SESSION["Sepet"] = array("ID" => 5, "Tutari" => 1250, "TaksitSayisi" => 6, "OdemeTuru" => "Kredi Kartı");
	
	setcookie("Sepet[ID]", 5); 
	setcookie("Sepet[Tutari]", 1250); 
	setcookie("Sepet[TaksitSayisi]", 6);
	setcookie("Sepet[OdemeTuru]", "Kredi Kartı");
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	echo "<pre>";
	print_r($_SESSION["Kullanici"]);
	echo "</pre>";
	
	?>
</body>
</html>