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

		CURLOPT_USERAGENT 	= Başlatılmış olan bir CURL oturumunda istenilen URL adaresine HTTP isteiğinde kullanılacak olan web browser'ın (tarayıcısının) tanımlanması ve ilgili browserdan (tarayıcıdan) erişim sağlandığını belirtmek için kullanılır.
		CURLOPT_REFERER 	= Başlatılmış olan bir CURL oturumunda istenilen URL adaresine HTTP isteiğinde kullanılacak olan referans gönderen site URL adresini belirtmek için kullanılır.
		
	*/
	$Oturum 	= curl_init();
	curl_setopt($Oturum, CURLOPT_URL, "http://127.0.0.1/PHPdersleri/sonuc.php");
	curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($Oturum, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0");
	$Sonuc 		= curl_exec($Oturum);
	curl_close($Oturum);
	
	echo $Sonuc;
	?>
</body>
</html>