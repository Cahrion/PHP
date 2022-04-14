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
		getdate() 	= Geçerli zaman bilgileri değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.	
		localtime() = Yerel zaman bilgileri değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		*/
	
	$Zaman 		=	getdate(); // Zaman bilgileri dizi olarak depolanır.
	
		echo "<pre>";
		print_r($Zaman);
		echo "</pre>";
	
	?>
</body>
</html>