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
	const ISIM 		= "Icabi";
	define("SOYISIM","KIRGIZ");
	const AD 		= ISIM . " " . SOYISIM;
	echo AD;
	
?>
</body>
</html>