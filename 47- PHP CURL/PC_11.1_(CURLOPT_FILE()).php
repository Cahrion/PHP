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
	
		CURLOPT_FILE	 = Başlatılmış olan bir CURL oturumunda istenilen URL adresinden elde edilen içeriğin aktarılacağı dosyayı tanımlamak için kullanılır.
	
	*/
	$Dosya 	= fopen("Resim.jpg", "w");
	
	$ch 	= curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://foto.haberler.com/haber/2020/04/23/en-guzel-turk-bayragi-resimleri-en-kaliteli-turk-13152872_6208_o.jpg");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FILE, $Dosya);
	
	$Sonuc 	= curl_exec($ch);
	curl_close($ch);
	
	if($Sonuc){  // Eğer dosyaya yüklenmişse 1 (true) ifadesi geçer. Tam tersi durumunda 0 (false) ifadesi geçer.
		echo "Dosya Başarıyla indirildi.";
	}else{
		echo "Dosya İndirme işlemi sırasında beklenmeyen bir hatayla karşılaşıldı.";
	}
	
	
	
	fclose($Dosya);
	?>
</body>
</html>