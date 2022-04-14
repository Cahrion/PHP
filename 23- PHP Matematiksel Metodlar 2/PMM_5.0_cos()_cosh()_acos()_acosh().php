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
		
			cos() 		=	Herhangi bir sayının cosinüsünü bularak, bulduğu değeri geriye döndürür.
			cosh() 		=	Herhangi bir sayının hiperbolik cosinüsünü bularak, bulduğu değeri feriye döndürür.
			acos() 		=	-1 ila 1 arasındaki herhangi bir sayının ark cosinüsünü radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
			acosh() 	=	Herhangi bir sayının hiperbolik ark cosinüsünü bularak, bulduğu değeri geriye döndürür.
			
			
		*/
	$Deger 		= 8;
	
	$Sonuc 		= cos($Deger);
	
		echo "Sayı Değeri: " . $Deger . "<br>";
		echo $Deger . " Sayısının cosinüsü: " . $Sonuc . "<br>";
	
	$Deger 		= 4.25;
	$Sonuc 		= cos($Deger);
	
		echo "Sayı Değeri: " . $Deger . "<br>";
		echo $Deger . " Sayısının cosinüsü: " . $Sonuc;
	
	?>
</body>
</html>