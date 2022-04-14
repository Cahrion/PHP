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
			
	$Dizin 			= "Harici";  // Dizin adı
	$YeniDizinAdi 	= "Harici2";
	$Degistir		= rename($Dizin, $YeniDizinAdi); // Verilen ilk alandaki dosya veya dizinin adını değiştirir.
	
	if($Degistir == 1){ // Boolean (Mantıksal) veri sınanabilir.
		echo "Dizin adı başarıyla degistirildi.";
	}else{
		echo "Dizin adı değiştirme işlemi sırasında hata oluştu.";
	}
	
	?>
</body>
</html>