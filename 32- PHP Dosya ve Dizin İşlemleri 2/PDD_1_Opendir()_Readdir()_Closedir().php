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
			opendir() 	=	Belirtilecek olan dizini açarak, açtığı dizini belleğe almak için kullanılır.
			readdir() 	=	opendir() metodu ile açılmış ve belleğe alınmış olan dizini kontrol ederek, ilgili dizin içerisinde bulunan tüm alt dizin ve dosya bilgilerini (isimler varsa uzantılar) okuyarak, okuduğu tüm bilgileri depolar. Ayrıca depoladığı tüm bilgiler döngü yardımıyla elde edilebilir.
			closedir() 	=	opendir() metodu ile açılmış ve belleğe alınmış olan dizini kapatarak, belleği boşaltır.
		*/
			
	$Dizin 			= "./";  
	$DizinAc 		= opendir($Dizin);  
	while(($Oku = readdir($DizinAc)) != false){
		echo  "Dosya Adı: " . $Oku . "<br>Türü: " . filetype($Dizin.$Oku) . "<br><br>";
	}		
	closedir($DizinAc);
	?>
</body>
</html>