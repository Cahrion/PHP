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
	
		CURLOPT_POST 		= Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlamak için kullanılır.
		CURLOPT_POSTFIELDS 	=  Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işleminde veri veya verileri tanımlamak için kullanılır.
	
	*/
	
	$ch 		= curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1/PHPdersleri/sonuc.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, [
		"AdiSoyadi" => "Onur Tatlı",
		"EmailAdresi" => "info@creativeteknoloji.com",
		"Telefon" => "05352255144",
		"Cinsiyet" => "Erkek",
		"Yas" => 35
	]);
	$Sonuc 		= curl_exec($ch);
	curl_close($ch);
	echo $Sonuc;
	
	?>
	
</body>
</html>