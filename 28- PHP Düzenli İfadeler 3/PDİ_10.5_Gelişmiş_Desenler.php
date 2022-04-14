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
	// Plaka bulma aracı
	
	$Icerik 	= "Merhaba Benim Adım Icabi Kırgız 34 AC 3427 Numaralı Plaka Benim Aracımdır.";
	$Desen		= "/\d{2}\s?[A-Z]{1,3}\s?\d{2,4}/"; 

	preg_match_all($Desen, $Icerik, $Sonuc);

		echo $Icerik . "<br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>