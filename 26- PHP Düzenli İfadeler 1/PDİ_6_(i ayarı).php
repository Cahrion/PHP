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
			i	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin, desende bulunan boşluğun etkisiz hale getirerek kontrol edilmesini sağlar.
		*/
	
	$Icerik 		= "Merhaba Benim Adım Icabi Kırgız, Ben Bir PHP Ögrencisiyim. Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";

	$Desen		= "/icabi/i"; // (i) parametresi büyük harf küçük harf duyarlılığını kaparır.
	
	preg_match_all($Desen, $Icerik, $Sonuc); 
	
		echo "Orjinal İçerik: <br>" .$Icerik . "<br><br>";
		echo "Değişen İçerik: <br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>