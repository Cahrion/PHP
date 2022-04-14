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
		const ISIM		= "Can"; 
		const SOYISIM 	= "Kahraman";
	}
	
	$Islem 				= new Deney;
	
	Deney::Isim 		= 	"Icabi"; 	// "Sabit"'ler değiştirilemezler.'
	Deney::Soyisim 		= 	"Kırgız";   // "Sabit"'ler değiştirilemezler.'
	echo Deney::Isim . " " . Deney::Soyisim ;
	
	
	?>
</body>
</html>