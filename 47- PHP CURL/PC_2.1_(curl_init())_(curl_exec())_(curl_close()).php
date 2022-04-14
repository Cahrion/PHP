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
			
		curl_init() 	= Yeni bir CURL oturumu başlatmak / tanımlamak için kullanılır.
		curl_exec() 	= Kendisine parametre olarak veirlen değer doğrultusunda başlatılmış olan bir CURL oturumunu çalıştırmak için kullanılır.
		curl_close() 	= Kendisine parametre olarak veirlen değer doğrultusunda başlatılmış olan bir CURL oturumunu sonlandırmak / kapatmak için kullanılır.
	
	*/
	
	$ch 	= curl_init("http://www.extraegitim.com"); // Yönlendirme olan sayfaya gidersek sayfa gelmez.
	curl_exec($ch);
	curl_close($ch);
	
	
	?>
</body>
</html>