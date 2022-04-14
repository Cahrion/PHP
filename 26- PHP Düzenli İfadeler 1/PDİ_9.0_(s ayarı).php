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
		/*
			s	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin, birden fazla satırı varsa tüm satırların kontrol edilmesini sağlar.
		*/
	
	$Icerik 		= "Merhaba Benim Adım Icabi Kırgız,
	Ben Bir PHP Ögrencisiyim.
	Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";

	$Desen		= "/.*/"; // Normal hal
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: <br>" .$Icerik . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>