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
		?? 	= Null koşul ifadesi
	*/
	
	$GelenIsimDegeri 	=  $_GET["KullaniciIsmi"] 	 ?? "HATA"; 		// Kaldırıldı.
	$GelenSoyisimDegeri =  $_GET["KullaniciSoyismi"] ?? "Değer yok"; 	// Kaldırıldı.
	
	echo "Formdan gelen isim değeri: " . $GelenIsimDegeri . "<br>";
	echo "Formdan gelen Soyisim değeri: " . $GelenSoyisimDegeri . "<br>";
	
	
	
	
	?>
</body>
</html>