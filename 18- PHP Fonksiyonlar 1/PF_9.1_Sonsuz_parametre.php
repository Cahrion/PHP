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
		func_num_args()		= Fonksiyona gönderilen parametre sayısını bulmak için kullanılır.
		func_get_args()		= Fonksiyona gönderilen parametre değerlerini alarak yeni bir dizi oluşturmak için kullanılır.
		func_get_arg()		= Fonksiyona gönderilen parametre değerlerini bir dizi olarak kabul ederek, belirtilecek olan anahtara ait değeri döndürmek elamanın değerini döndürmek için kullanılır.
	*/
	
	
		function IslemYap(){ 
			
			$GelenParametreSayisi 		= func_num_args();
			echo "Fonksiyona gelen parametre sayısı: " . $GelenParametreSayisi . "<br>";
			
			$GelenParametreDegerleri 	= func_get_args(); // Dizi şeklinde getirir.
			
			echo "<pre>";
			print_r($GelenParametreDegerleri);
			echo "</pre>";
			
			
		}
	
		IslemYap("Icabi", "Kırgız", "İstanbul", "Öğrenci", "19", "Erkek", "icabikrz@gmail.com"); 
		IslemYap("Aslı", "Kaya", 20); 
		IslemYap("Umut", "Cesur"); 
	
	?>
</body>
</html>