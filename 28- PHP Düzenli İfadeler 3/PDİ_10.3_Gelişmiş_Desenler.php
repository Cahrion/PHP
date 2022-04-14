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
	// Tarih bulma aracı
	
	$Icerik 	= "Merhabalar benim adım İcabi Kırgız ben 28.03.2002 doğumluyum arkadaşlarım ise Umutcan 11:06:2002 doğumlu ve Aslı 07/11/01 doğumlu";
	$Desen		= "/\d{1,2}\.?:?\/?\d{1,2}\.?:?\/?\d{2,4}/"; 
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo $Icerik . "<br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>