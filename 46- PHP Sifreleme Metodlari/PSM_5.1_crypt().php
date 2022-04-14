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
			
			crypt() 		= Belirtilecek olan içeriğin tek yönlü gelişmiş bir şekilde şifrelemesini yaparak, şifrelediği değeri geriye döndürür.
				Tuz sayısı 	= 2-9-12'lik olabilir.
		*/
			
	$Deger 		= "Icabi Kırgız";
	$Olustur 	= crypt($Deger, '$1$ICABIKRG$'); // 12 karakterlik tuz kullanılmış MD5 şifreleme. (Her zaman ($1$) ile başlaması gerekir ve son karakteri ($) olması gerekir.)
	echo $Olustur;
	
	$Deger 		= "Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız Icabi Kırgız ";
	$Olustur 	= crypt($Deger, '$1$ICABIKRG$'); 
	echo $Olustur; // Karakter sayısı uzayınca çıkan karakter sayısı uzamamz.
	
	
	?>
</body>
</html>