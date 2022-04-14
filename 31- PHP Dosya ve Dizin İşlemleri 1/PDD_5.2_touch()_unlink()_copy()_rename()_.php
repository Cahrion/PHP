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
			touch() 	= Belirtilecek olan değer doğrultusunda, yeni bir dosya oluşturmak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (Mantıksal) veri türünde döndürmek için de kullanılır.
			unlink() 	= Belirtilecek olan değer doğrultusunda, dosya silmek için kullanılır. Ayrıca istenirse işlem sonucunu boolean (Mantıksal) veri türünde döndürmek için de kullanılır.
			copy() 		= Belirtilecek olan değer doğrultusunda, dosya kopyalamak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (Mantıksal) veri türünde döndürmek için de kullanılır.
			rename() 	= Belirtilecek olan değer doğrultusunda, dosyayı yada dizini yeniden adlandırmak veya taşımak için kullanılır. Ayrıca istenirse işlem sonucunu boolean (Mantıksal) veri türünde döndürmek için de kullanılır.
		*/
			
	$Dosya 		= "Cahrion.txt"; 
	$KopyaDosya = "icabi.txt";
	$Kopyala	= copy($Dosya); // verilen isme göre o dosyayı kopyalar ve yeni dosyanın ismiyle yeni bir dosya oluşur..
	
	if($Kopyala == 1){ // Boolean (Mantıksal) veri sınanabilir.
		echo "Dosya başarıyla kopyalandı.";
	}else{
		echo "Dosya kopyalama işlemi sırasında hata oluştu.";
	}
	
	?>
</body>
</html>