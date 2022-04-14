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
	
	$Sonuc 			= range("a", "z"); 
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
		
	?>
</body>
</html>