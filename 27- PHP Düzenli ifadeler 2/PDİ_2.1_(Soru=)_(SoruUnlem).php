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
			?=	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin karakter dizilim içerisindeki belirtilen bir referans değerin önünde düzenli ifadeyle eşleşebilecek değer / değerleri aramak için kullanılır.
			?! 		=	Düzenli ifade dahilinde kontrol edilecek olan içerigin karakter dizilim içerisindeki belirtilen bir referans değer ile takip edilmeyen düzenli ifadeyle eşleşebilecek değer / değerleri aramak için kullanılır.
		*/
	
	$Icerik 	= "Merhaba Benim Adım Icabi Kırgız, Ben Bir PHP Ögrencisiyim. Beni Facebook üzerinden Icabi_kırgız123 şeklinde arıyarak bulabilirsiniz.";
	
	$Desen		= "/Kırgız(?!123)/i"; // (?!Değer) devamında gelen değerle devam edip etmediğine bakar. Etmezse kabul eder.
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>