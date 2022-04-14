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
			u	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin, Unicode (evrensel kod) tanımlaması ile kontrol edilmesini sağlar.
		*/
	
	$Icerik 		= "Merhaba Benim Adım Icabi Kırgız, Ben Bir PHP Ögrencisiyim. Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";

	$Desen		= "//u"; 
	// (u) Farklı dillere uygun kılar. Yoksa normal şartlarda sorun çıkar (Farklı dil karakterler problem çıkarır.)
	
	$Sonuc		= preg_split($Desen, $Icerik); 
	
		echo "Orjinal İçerik: <br>" .$Icerik . "<br><br>";
		echo "Değişen İçerik: <br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>