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
			number_format() 		=	Herhangi bir sayıyı belirtilecek olan ayraçlar doğrultusunda biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
		*/
	
	$Sayi 		= 865.7635;
	
		echo "Sayının orjinal hali: " . $Sayi . "<br>";
	
	$Formatla	= number_format($Sayi); // Normal hali (round) yuvarlama işlemi yapar.
	
		echo "Sayının formatlanmış hali: " . $Formatla; 
	
	?>
</body>
</html>