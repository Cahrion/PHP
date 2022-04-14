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
		
		boolval() 	= Herhangi bir değişken içeriğinin boolean (mantıksal) veri türü değerini geriye döndürür.
		intval() 	= Herhangi bir değişken içeriğinin integer (tam sayı) veri türü değerini geriye döndürür.
		floatval() 	= Herhangi bir değişken içeriğinin double (ondalıklı sayı) veri türü değerini geriye döndürür.
		doubleval() = Herhangi bir değişken içeriğinin double (ondalıklı sayı) veri türü değerini geriye döndürür.
		
		*/
	
	$Deger				= 8.55;
	$DegerVeriTuru 		= gettype($Deger);
	
		echo "Icerik: " . $Deger . "<br>";
		echo "Veri Türü: " . $DegerVeriTuru . "<br><br>";
	
	// intval
		echo "İkinci Veri Iceriği: " . intval($Deger) . "<br>";
	
	$DegerVeriTuruSon 	= gettype($Deger); // Tekrar veriye bakma
		echo "İkinci Veri Türü: " . $DegerVeriTuruSon . "<br><br>";
	
	
	
	
	?>
</body>
</html>