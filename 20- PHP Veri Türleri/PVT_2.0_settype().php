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
			gettype()	= Herhangi bir değişken içeriğinin veri türünü belirlemek / değiştirmek için kullanılır.
		*/
	$Deger 				= "8";
	$DegerVerisi 		= gettype($Deger);
	
		echo "Iceriğin ilk hali: " . $Deger . "<br>";
		echo "Iceriğin ilk halinin Veri Türü: : " . $DegerVerisi . "<br><br>";
	
	settype($Deger, "integer"); // (int) yazılabilir.
	
	$DegerYeniVerisi	= gettype($Deger);
	
		echo "Iceriğin son hali: " . $Deger . "<br>";
		echo "Iceriğin son halinin Veri Türü: : " . $DegerYeniVerisi . "<br><br>";
	?>
</body>
</html>