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
			mkdir() 	=  Belirtilecek olan değer ve izinler doğrultusunda yeni bir dizin oluşturmak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
			rmdir() 	=  Belirtilecek olan değer ve izinler doğrultusunda dizini silmek için kullanılır. Ayrıca istenirse işlem sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
		*/
			
	$Dizin 			= "Cahrion";  
	
	mkdir($Dizin, 0777); // chmod ($Dizin, 0777) (Ek olarak chmod açmak daha güvenilir.)
	,
	// chmod ayarıda ek olarak girilebilir. (Windows'ta ve Linux'ta chmod değerleri hatalı olabiliyor.) (ÖNERİLMEZ. (chmod hali))

	
	
	?>
</body>
</html>