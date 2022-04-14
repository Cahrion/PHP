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
	
		CURLOPT_COOKIE		= Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olna yeni cookie (çerez) / cookie'lar (çerezler) oluşturmak için kullanılır
		CURLOPT_COOKIEJAR	= Başlatılmış olan bir CURL oturumu sonlandırıldığında / kapaptıldığında daha önceden oluşmuş olan cookie'lerin (çerezlerin) kaydedileceği dosyayı tanımlamak için kullanılır.
		CURLOPT_COOKIEFILE	= Başlatılmış olan bir CURL oturumunda istenilen URL adresinde kullanılacak olan cookie'lerin (çerezlerin) tutulduğu dosyayı belirtmek ve içeriğindeki değerleri karşı server'a (sunucuya) iletmek için kullanılır.
 
	*/
	
	$ch 		= curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1/PHPdersleri/PC_12.3_COOKİE_sonuc.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, ["KullaniciAdi" => "Icabi",
										  "KullaniciSifre" => "123456"
										 ]);
	curl_setopt($ch, CURLOPT_COOKIE, "Kullanici=TREC");
	curl_setopt($ch, CURLOPT_COOKIEJAR, __DIR__ . "/cerez.txt"); // Kök dizinde başlar.
	$Sonuc 		= curl_exec($ch);
	curl_close($ch);
	echo $Sonuc;
	
	$ch2 		= curl_init();
	curl_setopt($ch2, CURLOPT_URL, "http://127.0.0.1/PHPdersleri/PC_12.5_COOKİE_KontrolluIkinciSayfa.php");
	curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch2, CURLOPT_COOKIEFILE, __DIR__ . "/cerez.txt"); // Çerezi alır.
	$Sonuc2 	= curl_exec($ch2);
	curl_close($ch2);
	echo $Sonuc2;
	
	?>
</body>
</html>