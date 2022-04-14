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

		$GelenAd 			= $_GET["Ad"];
		$GelenSoyad			= $_GET["Soyad"];
		$GelenTelefon		= $_GET["Telefon"];
		$GelenEmailAdresi	= $_GET["EmailAdresi"];
		
			echo "Adınız :" . $GelenAd . "<br>";
			echo "Soyadınız: " . $GelenSoyad . "<br>";
			echo "Telefon Numaranız: " . $GelenTelefon . "<br>";
			echo "E-mail Adresiniz: " . $GelenEmailAdresi;
	
	?>
</body>
</html>