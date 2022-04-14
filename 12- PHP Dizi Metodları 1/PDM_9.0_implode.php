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
		implode() 	= Diziyi birleştirerek düz bir metin içeriği oluşturmak için kullanılır.
	*/
	
	$Isimler 	= array("Volkan","Hakan","Onur","Ümit","Serkan","Levent");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$Sonuc 		= implode($Isimler);
	
	echo "Metnin son hali: " . $Sonuc;
	
	?>
</body>
</html>