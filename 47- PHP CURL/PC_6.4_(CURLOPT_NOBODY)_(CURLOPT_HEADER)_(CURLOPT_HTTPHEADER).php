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

		CURLOPT_NOBODY 		= Başlatılmış olan bir CURL oturumunda istenilen URL adresinden elde edilen içeriğin BODY (gövde) alanının alınmasını veya çıktılanmasını durdurmak için kullanılır.
		CURLOPT_HEADER		= Başlatılmış olan bir CURL oturumunda istenilen URL adresinden elde edilen içerik ile birlikte HTTP üst bilgisinin de bulunması yada alınması gerektiğini belirtmek için kullanılır.
		CURLOPT_HTTPHEADER 	= Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP üst bilgisi göndermek / tanımlamak için tanımlanır.
		
	*/
	
	$ch  		= curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1/PHPdersleri/sonuc.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"GuvenlikKodu: 1234567890ABCDEFG"
	));  // Bu kod sayesinde gönderim yaptık.
	$Sonuc	 	= curl_exec($ch); 
	curl_close($ch);
	
	echo nl2br($Sonuc);
	?>
</body>
</html>