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
			
			crc32() 	= Belirtilecek olan içeriğin crc32 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
			
		*/
			
	$Sifre 		= "28032002";									// Normal Hal
	$Olustur 	= crc32($Sifre); 
	echo $Olustur . "<br>";
	
	$Sifre 		= "28032002-Icabi_Kırgızverisinin489751kere"; 	// Uzunluğun artması şifre boyutunu değiştirmez.
	$Olustur 	= crc32($Sifre); 
	echo $Olustur;
	
	?>
</body>
</html>