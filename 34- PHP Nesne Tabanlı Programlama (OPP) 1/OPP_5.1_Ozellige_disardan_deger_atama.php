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
		private $Isim 		= "Can"; 
		protected $Soyisim 	= "Kahraman";
	}
	
	$Islem 				= new Deney;
	
	$Islem->Isim 		= 	"Icabi"; 	// Ulaşım Hakkı yok.
	$Islem->Soyisim 	= 	"Kırgız";  // Ulaşım Hakkı yok.
	echo $Islem->Isim . " " . $Islem->Soyisim ;
	
	
	?>
</body>
</html>