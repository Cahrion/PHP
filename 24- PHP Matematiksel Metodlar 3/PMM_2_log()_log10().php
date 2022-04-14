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
		
			log() 	= Herhangi bir sayının doğal logaritmasını bularak. bulduğu değeri geriye döndürür.
			log10() = Herhangi bir sayının 10'luk tabana göre (base-10) doğal logaritmasını bularak. bulduğu değeri geriye döndürür.
			
		*/
	
	$Sayi 		= 8;
	
	$DegerBir 	= log($Sayi);
	$DegerIki 	= log10($Sayi);
		
		echo "8 sayısının doğal logaritması: " . $DegerBir . "<br>";
		echo "8 sayısının 10'luk tabana göre (base-10) doğal logaritması: " . $DegerIki;
	
	?>
</body>
</html>