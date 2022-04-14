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
			uniqid() 	= Mikrosaniye cinsinden geçerli zamana dayalı olarak belirtilen önek ile benzersiz / eşsiz bir değer üreterek ürettiği değeri geriye döndürür.
			md5() 		= Belirtilecek olan içeriğin md5 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
			md5_file() 	= Belirtilecek olan dosyanın md5 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
		*/
			
	$Deger 		= "}'AzG/&^d=";
	
	$Olustur 	= uniqid(); 			// Normal hal
	echo $Olustur . "<br>";
	$Olustur 	= uniqid($Deger); 		// Ön ad eklendi.
	echo $Olustur . "<br>";
	$Olustur 	= uniqid($Deger, true); // Döküntü eklendi.
	echo $Olustur;
	
	?>
</body>
</html>