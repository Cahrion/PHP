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
			var_dump() 	= Herhangi bir değişkene ait tüm yapıya ve bilgilere ulaşmak için kullanılır.	
		*/
	
	class Deney{
		
		public $DegerBir 	= "Icabi Kırgız";
		public $DegerIki 	= 2018;
		
	}
	
	$Sonuc 	= new Deney;
	
	echo "<pre>";
	var_dump($Sonuc);
	echo "<pre>";
	
	?>
</body>
</html>