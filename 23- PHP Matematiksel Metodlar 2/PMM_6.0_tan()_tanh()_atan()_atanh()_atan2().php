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
		
			tan() 		=	Herhangi bir sayının tanjantını bularak, bulduğu değeri geriye döndürür.
			tanh() 		=	Herhangi bir sayının hiperbolik tanjantını bularak, bulduğu değeri feriye döndürür.
			atan() 		=	-1 ila 1 arasındaki herhangi bir sayının ark tanjantını radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
			atanh() 	=	Herhangi bir sayının hiperbolik ark tanjantını bularak, bulduğu değeri geriye döndürür.
			atan2() 	=	Herhangi iki sayının ark tanjantını radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
			
		*/
	$Deger 		= 8;
	
	$Sonuc 		= tan($Deger);
	
		echo "Sayı Değeri: " . $Deger . "<br>";
		echo $Deger . " Sayısının tanjantını: " . $Sonuc . "<br>";
	
	$Deger 		= 4.25;
	$Sonuc 		= tan($Deger);
	
		echo "Sayı Değeri: " . $Deger . "<br>";
		echo $Deger . " Sayısının tanjantını: " . $Sonuc;
	
	?>
</body>
</html>