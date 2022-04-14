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
	
		CURLFile 	=  Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlandıktan sonra, CURLOPT_POSTFIELDS dahilinde karşı server'a (sunucuya) dosya yüklemek için kullanılır.
	
	*/
	
	$ch 	= curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1/PHPdersleri/sonuc.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, [
		"Dosya" => new CURLFile(__DIR__ . "/Dokumanlar/JavascriptAdanZye.png", "image/png") // Olası bir hatayı düzeltir.
	]);
	$Sonuc 	= curl_exec($ch);
	curl_close($ch);
	echo $Sonuc;
	
	
	?>
</body>
</html>