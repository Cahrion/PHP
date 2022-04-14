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
	
		include() 		=	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır.
		(Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilmez. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam eder.)
		
		include_once() 	=	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır.
		(Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam eder.)
		
		require() 		=	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır.
		(Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilmez. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam etmez.)
		
		require_once() 	=	PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır.
		(Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir. Herhangi bir hata kodu dönecek olur ise kodlar okunmaya devam etmez.)

		NOT -->
		(once) tagları önceden kullanılıp kullanılmadığını kontrol eder.
		(include) tagları hatalarda devam eder.
		(require) tagları hatalarda devam etmez.
	*/
	
		echo "Ilk Satır. <br>";
	
		include "Harici\dosya.php"; // olmayan dosya ile ne yapar (devamını okur.)
	
		echo "<br >Okunmaya devam eder<br>";
		echo "Okunmaya devam eder<br>";
		echo "Okunmaya devam eder<br>";
		echo "Okunmaya devam eder<br>";
	
		require "Harici\dosya.php"; // olmayan dosya ile ne yapar. (devamını okumaz.)
	
		echo "Okunmaya devam etmez<br>";
		echo "Okunmaya devam etmez<br>";
		echo "Okunmaya devam etmez<br>";
		echo "Okunmaya devam etmez<br>";
		echo "Okunmaya devam etmez<br>";
	
	?>
</body>
</html>