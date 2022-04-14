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
	// URL bulma aracı (En Gelişmiş)
	
	$Icerik 	= "Merhaba Benim Adım Icabi Kırgız, http://www.extraegitim.com adresi benim hocamın site adresidir.";
	$Desen		= "/(http(s)?:\/\/.)?(www\.)?[a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]{2,256}\.[a-z]{2,6}\b([a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]*)+/"; 

	preg_match($Desen, $Icerik, $Sonuc);

		echo $Icerik . "<br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>