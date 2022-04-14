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
			fopen()		=	Belirtilecek olan dosyayı veya URL'i (Uniform Resource Locator) (Nizami Kaynak Bulucu), belirtilecek olan modda açmak için kullanılır.
				MODLAR;
				r		= 	Okuma amaçlı açar.
				r+		=	Hem okuma hemde yazma amaçlı açar.
				
				w 		=	Yazma amaçlı açar. Dosya verisini boşaltarak yeniden yazar. Dosya mevcut değilse oluşturulur.
				w+ 		=	Hem okuma hemde yazma amaçlı açar. Dosya verisini boşaltarak yeniden yazar. Dosya mevcut değilse oluşturulur.
				
				a 		=	Yazma amaçlı açar. Dosya verisine dokunmadan sonuna ek yaparak yazar. Dosya mevcut değilse oluşturulur.
				a+ 		=	Hem okuma hemde yazma amaçlı açar. Dosya verisine dokunmadan sonuna ek yaparak yazar. Dosya mevcut değilse oluşturulur.
				
				x		=	Yazma amaçlı açar. Dosya mevcut değilse hata fopen() metodu "false" değeri döndürürerek hata üretir.
				x+		=	Hem okuma hemde yazma amaçlı açar. Dosya mevcut değilse hata fopen() metodu "false" değeri döndürürerek hata üretir.
			
			
			fclose()	=	fopen() metodu ile açılmış olan dosyayı veya URL'i (Uniform Resource Locator) (Nizami Kaynak Bulucu) kapatmak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
		*/
			
	$URL 			= "https://socialdilemma.com/";  
	$URLAc 			= fopen($URL, "r"); 
	
	if($URLAc){
		echo $URL . " isimli URL başarıyla açıldı.";
	}else{
		echo $URL . " isimli URL'in açılma sürecinde beklenmeyen bir hata oluştu.";
	}
		
	fclose($URLAc);

	?>
</body>
</html>