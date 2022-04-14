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
	
	?: 		= ternary operatörü (Üçlü operatör)
	
	Yapısı 	=
	(Koşul veya Koşullar) ? Geçerli ifade : Geçersiz ifade;
	*/
	
	$saat 	= 9;
	$Sonuc 	= ($saat < 12) ? "Oğleden önce" : "Öğleden sonra";
	echo $Sonuc;
	?>
</body>
</html>