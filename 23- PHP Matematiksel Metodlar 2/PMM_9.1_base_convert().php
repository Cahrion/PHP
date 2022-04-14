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
		
			base_convert() 	=	Herhangi bir sayının; binary (ikilik), octal (sekizlik), decimal (onluk), hexadecimal (on altılık) sayı sistemleri karşılığını bularak, bulduğu değeri geriye döndürür.
			
		*/
	
	$Deger 		= "8AC";
	$BinaryDonustur 			= base_convert($Deger, 16, 2);
	$OctalDonustur 				= base_convert($Deger, 16, 8);
	$HexadecimalDonustur 		= base_convert($Deger, 16, 10); 
		
		echo "hexadecimal (on altılık) sayı: " . $Deger . "<br>";
		echo "binary (ikilik) sayı: " . $BinaryDonustur . "<br><br>";
		echo "hexadecimal (on altılık) sayı: " . $Deger . "<br>";
		echo "octal (sekizlik) sayı: " . $OctalDonustur . "<br><br>";
		echo "hexadecimal (on altılık) sayı: " . $Deger . "<br>";
		echo "decimal (onluk) sayı: " . $HexadecimalDonustur;
	
	?>
</body>
</html>