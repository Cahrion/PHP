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
		convert_uuencode() 	= Belirtilecek olan içeriği uuencode (Unix to Unix Encoding) (unix'ten unix'e kodlayıcı) algoritması kodlamasını bularak, bulduğu değeri geriye döndürür.
		convert_uudecode() 	= Belirtilecek olan ve uuencode (Unix to Unix Encoding) (unix'ten unix'e kodlayıcı) algoritması kullanılarak kodlanmış olan içeriği geri çözerek çözdüğü değeri geriye döndürür.
	*/
	
	$Icerik 	= "Icabi Kırgız - IK System";
	echo $Icerik . "<br>";
	$Sonuc 		= convert_uuencode($Icerik);
	echo $Sonuc;
	$Sonuc 		= convert_uudecode($Sonuc);
	echo $Sonuc;
	?>
</body>
</html>