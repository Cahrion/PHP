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
	
	$Sonuc 			= mkdir($Dizin);
	
	if($Sonuc == 1){
		echo "Dizin başarıyla oluşturuldu.";
	}else{
		echo "Dizin oluşturulma esnasında bir sorun oluştu.";
	}
	
		
	?>
</body>
</html>