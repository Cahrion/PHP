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

		$GelenAdSoyadDegeri 	= 	$_REQUEST["AdSoyad"];
		$GelenEmailAdresiDegeri = 	$_REQUEST["EmailAdresi"];
		$GelenTelefonDegeri 	= 	$_REQUEST["Telefon"];
		$GelenCinsiyetDegeri 	= 	$_REQUEST["Cinsiyet"];
		$GelenYasDegeri 		= 	$_REQUEST["Yas"];
	
			echo	"Adınız Soyadınız: " . $GelenAdSoyadDegeri . "<br>";
			echo	"E-Mail Adresiniz: " . $GelenEmailAdresiDegeri . "<br>";
			echo	"Telefonunuz: " . $GelenTelefonDegeri . "<br>";
			echo	"Cinsiyetiniz: " . $GelenCinsiyetDegeri . "<br>";
			echo	"Yaşınız: " . $GelenYasDegeri . "<br>";
	
	?>
</body>
</html>