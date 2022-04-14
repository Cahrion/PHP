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
	
	$Sayi 		= 1043865.4562;
	
		echo "Sayının orjinal hali: " . $Sayi . "<br>";
	
	$FormatlaBir	= number_format($Sayi, 2); 
	
		echo "Sayının formatlanmış hali: " . $FormatlaBir . "<br>"; 
	
	$FormatlaIki	= number_format($Sayi, 2, "|", "."); // Kuruş hanesi olmazsa (kuruş ayracı olmaz.)
	// 3. Parametre = Kuruş ayracı
	// 4. Parametre = Binlik ayracı
	
		echo "Sayının Ayraçla formatlanmış hali: " . $FormatlaIki; 
	
	?>
</body>
</html>