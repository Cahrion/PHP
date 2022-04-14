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
		range()	 	 = Belirtilecek olan değer aralıkları doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
		PARAMETRELER =
		1. Parametre = Başlangıç değeri.
		2. Parametre = Son değeri.
		3. Parametre = Artış miktarı. 
	*/
	
	
	$Sayilar 	= array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

		echo "<pre>";
		print_r($Sayilar);
		echo "</pre>";
	
	$Sonuc 			= range(1, 10); 
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
		
	?>
</body>
</html>