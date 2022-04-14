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
			
		curl_setopt()  			= Kendisine parametre olarak veirlen değer doğrultusunda başlatılmış bir CURL oturumuna seçenek eklemek için kullanılır.
		curl_setopt_array()  	= Kendisine parametre olarak veirlen değer doğrultusunda başlatılmış bir CURL oturumuna dizi halinde seçenek / seçenekler eklemek için kullanılır.
		
			CURLOPT_URL				= Başlatılmış bir CURL oturumunda içeriğine ulaşılmak istenilen URL adresini belirtmek için kullanılır.
			CURLOPT_RETURNTRANSFER	= Başlatılmış bir CURL oturumunda istenilen URL'den elde edilen içeriğin doğrudan ekrana çıktılanmasını durdurarak belirtilecek olan değişkene aktarılmasını sağlamak için kullanılır.
			CURLOPT_TIMEOUT			= Başlatılmış bir CURL oturumunda maksimum çalıştırılabilirlik süresini saniye cinsinden belirtmek için kullanılır.
			CURLOPT_TIMEOUT_MS		= Başlatılmış bir CURL oturumunda maksimum çalıştırılabilirlik süresini milisaniye cinsinden belirtmek için kullanılır. (1Saniye = 1000MiliSaniye )
		
	*/
	
	$ch  		= curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://socialdilemma.com/"); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 90); // 90 saniye boyunca çalışması sağlanır.
	
	$Sonuc	 	= curl_exec($ch); 
	curl_close($ch);
	
	echo "Bu degerden sonra gelicek.";
	echo $Sonuc;
	
	
	?>
</body>
</html>