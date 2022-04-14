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
		filetype() 		= Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya yada dizin olup olmadığının verisini geriye döndürür.
		fileowner() 	= Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya sahibi değerini bularak, bulduğu değeri geriye döndürür.
		filegroup() 	= Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya sahibi grubunu değerini bularak, bulduğu değeri geriye döndürür.
		fileinode() 	= Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya düğüm numarası değerini bularak, bulduğu değeri geriye döndürür.
		fileperms() 	= Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya erişim izni değerini bularak, bulduğu değeri geriye döndürür.
		filesize() 		= Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya boyutu değerini bularak, bulduğu değeri geriye döndürür. (byte)
		filectime() 	= Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde dosya oluşturulma tarihi değerini bularak bulduğu değeri geriye döndürür.
		filemtime() 	= Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde dosya değiştirilme tarihi değerini bularak bulduğu değeri geriye döndürür.
		fileatime() 	= Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde dosya son erişim tarihi değerini bularak bulduğu değeri geriye döndürür.
		*/
			
	$Dosya 		= "Harici\Ornek.zip";
	$Sor 		= filesize($Dosya); 
	
		echo $Dosya . " dosya boyutu: " . $Sor . "byte"; 
	
	?>
</body>
</html>