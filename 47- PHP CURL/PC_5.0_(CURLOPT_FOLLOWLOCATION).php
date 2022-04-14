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

		CURLOPT_FOLLOWLOCATION	= Başlatılmış bir CURL oturumunda istenilen URL adresine ait server'in (sunucunun) HTTP başlığının bir parçası olarak gönderdiği Location başlığını izleyebilmek için kullanılır.
		
	*/
	
	$ch  			= curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.kukumav.net/yeni-sayfa.html"); // Yönlendirilmeli sayfa
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Yönlendirme var ise o yönlendirmeyi takip eder.
	$Sonuc	 	= curl_exec($ch); 
	curl_close($ch);
	
	
	echo $Sonuc;
	
	
	?>
</body>
</html>