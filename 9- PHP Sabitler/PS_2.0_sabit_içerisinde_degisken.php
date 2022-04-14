 <!doctype html>
<?php
	session_start();
?>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
<?php 
	$Deger 		= "Icabi Kırgız";
	$Yas 		= 19;
	define("ISIM",$Deger . " - " . $Yas);
	// bu yapı çalışırken (PS_2.1_sabit_içerisinde_degisken.php) içerisindeki const yapısı çalışmaz.
	echo ISIM;
	
?>
</body>
</html>