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
	
	$Zaman 		=	getdate(); 
	
		echo "Yıl: " . $Zaman["year"] . "<br>";
		echo "Ay: " . $Zaman["mon"] . "<br>";
		echo "Gün: " . $Zaman["mday"] . "<br>";
	
		echo "Saat: " . $Zaman["hours"] . "<br>";
		echo "Dakika: " . $Zaman["minutes"] . "<br>";
		echo "Saniye: " . $Zaman["seconds"] . "<br>";
	
		echo "Bugün aylardan " . $Zaman["month"] . "<br>";
		echo "Bugün günlerden " . $Zaman["weekday"] . "<br>";
	
		echo "Bugün yılın " . $Zaman["yday"] . "<br>";
		echo "Bugün haftanın " . $Zaman["wday"] . "<br>";
	
		echo "Bugünün zaman damgası " . $Zaman[0];
	
	?>
</body>
</html>