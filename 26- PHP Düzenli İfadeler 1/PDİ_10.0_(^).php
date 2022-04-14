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
			^	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin,karakter diziliminin başlangıcı ile düzenli ifade arasında eşleşme aramak için kullanılır.
		*/
	
	$Icerik 		= "Merhaba Benim Adım Icabi Kırgız,Ben Bir PHP Ögrencisiyim.Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";

	$Desen		= "/^PHP/"; // (^) Başlangıçta neyle başladığını bakmak için kullanılır
	
	preg_match($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: <br>" .$Icerik . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>