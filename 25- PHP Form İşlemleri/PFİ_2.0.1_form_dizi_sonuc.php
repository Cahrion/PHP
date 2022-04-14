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

		$GelenAdSoyadDegeri 			= 	$_GET["AdSoyad"];
		$GelenHobilerAlisverisDegeri 	= 	$_GET["HobilerAlisveris"];
		$GelenHobilerSeyahatDegeri 		= 	$_GET["HobilerSeyahat"];
		$GelenHobilerSinemaDegeri 		= 	$_GET["HobilerSinema"];
		$GelenHobilerTiyatroDegeri 		= 	$_GET["HobilerTiyatro"];
		$GelenHobilerYemekDegeri 		= 	$_GET["HobilerYemek"];
	
			echo	"Adınız Soyadınız: " . $GelenAdSoyadDegeri . "<br>";
			echo	"Hobileriniz " . $GelenEmailAdresiDegeri . "<br>";
			echo	"Hobileriniz " . $GelenHobilerSeyahatDegeri . "<br>";
			echo	"Hobileriniz " . $GelenHobilerSinemaDegeri . "<br>";
			echo	"Hobileriniz " . $GelenHobilerTiyatroDegeri . "<br>";
			echo	"Hobileriniz " . $GelenHobilerYemekDegeri . "<br>";
	
	?>
</body>
</html>