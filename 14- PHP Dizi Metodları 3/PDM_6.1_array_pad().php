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
		array_pad()	= Dizinin eleman veya elemanlar sayısını baz alarak, belirtilecek olan değeğrler doğrultusunda baştan veya sondan doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	
	$Isimler 		= array("Volkan", "Icabi", "Serkan", "Hakan"); 
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	$Sonuc 			= array_pad($Isimler, -10, "PHP"); // PHP yazar boş olan yerlere (10 tane oluncaya kadar) (bastan) (Anahtarlar korunur.)
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	

	?>
</body>
</html>