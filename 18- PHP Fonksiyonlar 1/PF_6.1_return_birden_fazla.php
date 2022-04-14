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
		
	function Islem(){
		$Isim 		= "Icabi";
		$Soyisim 	= "Kırgız";
		$Sehir	 	= "Istanbul";
		$Yas	 	= 19;
		$Meslek	 	= "Programlama ve yazılım geliştirme öğrencisi";
		
		return array($Isim, $Soyisim, $Sehir, $Yas, $Meslek); 
	}
	$Sonuc 			= Islem();
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	echo "İsim: " . $Sonuc[0] . "<br>";
	echo "Soyisim: " . $Sonuc[1] . "<br>";
	echo "Sehir: " . $Sonuc[2] . "<br>";
	echo "Yas: " . $Sonuc[3] . "<br>";
	echo "Meslek: " . $Sonuc[4] . "<br>";
	
	
	?>
</body>
</html>