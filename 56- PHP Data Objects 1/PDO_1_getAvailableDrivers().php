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
		
		getAvailableDrivers() 	= PHP yazılımı içerisinde sisteme tanımlı olan ve kullanılabilir PDO sürücüleri listesini bulur. Bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu değeri geriye döndürür.
	
	*/
	
	$Degerler 	= PDO::getAvailableDrivers();
	echo "<pre>";
	print_r($Degerler);
	echo "<pre>";
	?>
</body>
</html>