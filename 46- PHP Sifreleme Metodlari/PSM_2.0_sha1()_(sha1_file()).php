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
			
			sha1() 		= Belirtilecek olan içeriğin sha1 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
			sha1_file() = Belirtilecek olan dosyanın sha1 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
			
			// Bu şifreleme sistemi çözüldü.
		*/
			
	$Sifre 		= "28032002";
	$Olustur 	= sha1($Sifre); 		// Normal hal
	echo $Olustur . "<br>";
	
	$Sifre 		= "28032002-Icabi KırgızBeyfendininmotlarinigordunuz";
	$Olustur 	= sha1($Sifre); 		// Uzunluğun artması boyutu çıkan özet boyutu artmaz.
	echo $Olustur . "";
	
	?>
</body>
</html>