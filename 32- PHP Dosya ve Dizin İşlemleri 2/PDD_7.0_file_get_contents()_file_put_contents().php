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
	
	$Dosya 		= "Harici/Belge.txt";
	$Oku 		= file_get_contents($Dosya); // Satır sonlarını (Enter) boşluk olarak ele alır. (<br> komutu ve \n komutu hariç)
	
	echo $Oku;
	?>
</body>
</html>