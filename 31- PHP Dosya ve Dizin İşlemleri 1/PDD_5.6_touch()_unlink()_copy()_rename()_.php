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
			
	$Dosya 			= "Harici/Chrion.txt";  
	$YeniKonum	 	= "Cahrion.txt"; // İstenirse ismi değiştirilebilir.
	
	$Tasi			= rename($Dosya, $YeniKonum); // Verilen ilk alandaki dosya veya dizinin ikinci alanda yeni konumu girilir.
	
	if($Tasi == 1){ // Boolean (Mantıksal) veri sınanabilir.
		echo "Dosya başarıyla taşındı ve ismi değiştirildi.";
	}else{
		echo "Dosya taşıma işlemi ve isim değiştirme işlemi sırasında hata oluştu.";
	}
	
	?>
</body>
</html>