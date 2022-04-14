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
		array_fill()	 	 = Belirtilecek olan değerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
		array_fill_keys() 	 = Dizi içerisinde bulunan eleman veya elemanları anahtar gibi görerek, belirtilecek olan değer doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak içni kullanılır.
		array_fill() PARAMETRELERİ =
		1. Parametre = Başlangıç değeri.
		2. Parametre = kaç adet yazılacak.
		3. Parametre = Yazılacak değer
	*/
	
	
	$Sonuc 		= array_fill(0, 6, "Volkan");
//  $Degerler 		= array(0 => "Volkan", 1 => "Volkan", 2 => "Volkan",3 => "Volkan", 4 => "Volkan", 5 => "Volkan");
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	?>
</body>
</html>