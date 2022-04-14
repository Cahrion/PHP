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
		
			exp() 		= Euler sayısının belirtilecek değer kadar üssünü bularak, bulduğu değeri geriye döndürür.
			expm1() 	= Euler sayısının belirtilecek değer kadar üssünü bularak ve bir eksilterek, bulduğu değeri geriye döndürür.
			
		*/
	
	$UssuDegeri	= 5;
	$DegerBir 	= exp($UssuDegeri);
	$DegerIki 	= expm1($UssuDegeri);
		
		echo "Euler sayısının (" . $UssuDegeri . ") üssü değeri: " . $DegerBir . "<br>";
		echo "Euler sayısının (" . $UssuDegeri . ") üssü değerinin 1 eksiği: " . $DegerIki . "<br>";
	
	?>
</body>
</html>