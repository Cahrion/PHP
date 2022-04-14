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
			file_get_contents() 	=	Belirtilecek olan dosya veya URL (Uniform Resource Locator) (Nizami Kaynak Bulucu) içeriğini kontrol ederek ve bilgileri tek bir defada bularak bulduğu değeri geriye döndürür.
			file_put_contents() 	=	Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır. Ayrıca işlem sonucunda yazılan karakter değerini bularak, bulduğu değeri geriye döndürür.
				Varsayılan 			= 	İçerikler silinir. Yeniden yazılır.
				FILE_APPEND 		= 	Eski içerikler silinmeden yeni içerikler sona eklenir.
		*/		
	
	$Icerik 	= "file_putcontents() Eğitim dersinin sonuc cıktısı";
	$Dosya 		= "Harici/Sonuc.txt";
	$Karakter 		= file_put_contents($Dosya, $Icerik, FILE_APPEND); // Ek yapar.
	
	if($Karakter >= 1){
		echo "Yazılan karakter sayısı: " . $Karakter;
	}else{
		echo "Yazım sırasında bir hata oluştu";
	}
	
	?>
</body>
</html>