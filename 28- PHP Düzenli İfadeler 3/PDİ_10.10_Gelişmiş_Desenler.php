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
	// Mail bulma aracı
	
	$Icerik 	= "Merhaba Benim Adım Icabi Kırgız, icabikrz@gmail.com.tr benim gmail adresimdir.";
//	$Desen		= "/ (\w+)@([a-z]+)\.([a-z]{2,})(.[a-z]{2}|) /"; #GRUP OLDUĞU İÇİN HER BİR ARAMAYI TEK TEK BULUR.
	$Desen		= "/ \w+@[a-z]+\.[a-z]{2,}(.[a-z]{2}|) /"; 

	preg_match($Desen, $Icerik, $Sonuc);

		echo $Icerik . "<br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>