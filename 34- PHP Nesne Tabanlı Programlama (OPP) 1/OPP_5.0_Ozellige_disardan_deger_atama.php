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
	
	class Deney{
		public $Isim 		= "Can";
		public $Soyisim 	= "Kahraman";
	}
	
	$Islem 				= new Deney;
	
	$Islem->Isim 		= 	"Icabi";
	$Islem->Soyisim 	= 	"Kırgız";
	echo $Islem->Isim . " " . $Islem->Soyisim . "<br>";
	
	$Islem->Isim 		= 	"Yavuz";
	$Islem->Soyisim 	= 	"Kara";
	echo $Islem->Isim . " " . $Islem->Soyisim;
	
	
	?>
</body>
</html>