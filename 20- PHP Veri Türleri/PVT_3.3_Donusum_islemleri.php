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
		
		Değerler 						= (boolean) & (bool) | (integer) & (int) | (float) & (double) & (real) | (string) | (array) | (object) |(unset)
		(boolean) & (bool) 				=	Mantıksal veri türüne dönüştürme.
		(integer) & (int)				=	Tam sayı veri türüne dönüştürme.
		(float) & (double) & (real) 	=	Ondalıklı sayı veri türüne dönüştürme.
		(string)						=	Alfanumerik (a-z A-Z 0-9) veri türüne dönüştürme.			
		(array)							= 	Dizi veri türüne dönüştürme.
		(object)						= 	Nesne veri türüne dönüştürme
		(unset)							=	null (boş / değeri olmayan) veri türüne dönüştürme
		*/
	
	$DegerBir 			= "5";
	$DegerBirVeriTuru 	= gettype($DegerBir);
	
		echo "Birinci Veri Iceriği: " . $DegerBir . "<br>";
		echo "Birinci Veri Türü: " . $DegerBirVeriTuru . "<br><br>";
	
	$DegerIki 			= (array) "5";
	$DegerIkiVeriTuru 	= gettype($DegerIki);
	
		echo "İkinci Veri Iceriği: ";
		print_r($DegerIki);
		echo "<br>";
		echo "İkinci Veri Türü: " . $DegerIkiVeriTuru . "<br><br>";
	
	
	
	
	?>
</body>
</html>