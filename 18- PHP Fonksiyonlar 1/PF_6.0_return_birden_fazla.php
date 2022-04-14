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
		$Yas	 	= 38;
		$Meslek	 	= "Programlama ve yazılım geliştirme uzmanı";
		
		return $Isim; // Birinci değer olunca biter. (Devamı gösterilmez.)
		return $$Soyisim;
		return $Sehir;
		return $Yas;
		return $Meslek;
		
	}
	$Sonuc 			= Islem();
	
	echo $Sonuc;
	
	?>
</body>
</html>