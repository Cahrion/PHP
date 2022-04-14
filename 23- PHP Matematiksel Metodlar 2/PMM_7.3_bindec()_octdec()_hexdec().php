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
		
			bindec() 	=	Herhangi bir binary (ikilik) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
			octdec() 	=	Herhangi bir octal (sekizlik) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
			hexdec() 	=	Herhangi bir hexadecimal (onaltılık) sayının, decimal (onluk) sayı sistemi karşılığını bularak, bulduğu değeri geriye döndürür.
			
		*/
	
	$Sayi 		= "010110101101";
	$Donustur 	= bindec($Sayi);
		
		echo "binary (ikilik) sayı: " . $Sayi . "<br>";
		echo "decimal (onluk) sayı: " . $Donustur . "<br><br>";
	
	$Sayi 		= 2655;
	$Donustur 	= octdec($Sayi);
		
		echo "octal (sekizlik) sayı: " . $Sayi . "<br>";
		echo "decimal (onluk) sayı: " . $Donustur . "<br><br>";
	
	$Sayi 		= "5AD";
	$Donustur 	= hexdec($Sayi);
		
		echo "hexadecimal (onaltılık) sayı: " . $Sayi . "<br>";
		echo "decimal (onluk) sayı: " . $Donustur;
	
	?>
</body>
</html>