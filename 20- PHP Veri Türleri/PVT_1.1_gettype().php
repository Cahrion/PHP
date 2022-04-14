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
			gettype()	= Herhangi bir değişken içeriğinin veri türünü bularak, bulduğu değeri geriye döndürür.
		*/
	class Deger{
		
		public $Isim 		= "Icabi Kırgız";
		
	}
	$Islem = new Deger;
	
	$Sonuc	= gettype($Islem);
	
		echo $Islem->Isim . "<br>";
		echo "Veri Türü: " . $Sonuc . "<br>";
	
	?>
</body>
</html>