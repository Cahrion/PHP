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
		
			sin() 		=	Herhangi bir sayının sinüsünü bularak, bulduğu değeri geriye döndürür.
			sinh() 		=	Herhangi bir sayının hiperbolik sinüsünü bularak, bulduğu değeri feriye döndürür.
			asin() 		=	-1 ila 1 arasındaki herhangi bir sayının ark sinüsünü radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
			asinh() 	=	Herhangi bir sayının hiperbolik ark sinüsünü bularak, bulduğu değeri geriye döndürür.
			
			
		*/
	$Deger 		= 8;
	
	$Sonuc 		= sin($Deger);
	
		echo "Sayı Değeri: " . $Deger . "<br>";
		echo $Deger . " Sayısının sinüsü: " . $Sonuc . "<br>";
	
	$Deger 		= 4.25;
	$Sonuc 		= sin($Deger);
	
		echo "Sayı Değeri: " . $Deger . "<br>";
		echo $Deger . " Sayısının sinüsü: " . $Sonuc;
	
	?>
</body>
</html>