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
	curl_setopt($ch, CURLOPT_URL, "http://www.dogumharitasi.astroloji.org/");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, [
		"long_deg" => "28",
		"ew" => "1",
		"long_min" => "58",
		"lat_deg" => "41",
		"ns" => "1",
		"lat_min" => "0",
		"name" => "aslı",
		"month" => "3",
		"day" => "28",
		"year" => "2002",
		"hour" => "12",
		"minute" => "17",
		"timezone" => "2",
		"sehir" => "istanbul",
		"submitted" => "TRUE",
		"submit" => "Do%F0um+Haritam%FD+G%F6ster"
	]);
	$Sonuc 		= curl_exec($ch);
	curl_close($ch);
	echo $Sonuc;
	
	
	?>
</body>
</html>