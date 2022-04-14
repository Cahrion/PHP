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
	define("ISIM","Icabi");
	echo "Deger: ". ISIM . "<br><br>";
	echo ISIM[0] . "<br>";
	echo ISIM[1] . "<br>";
	echo ISIM[2] . "<br>";
	echo ISIM[3] . "<br>";
	echo ISIM[4];
	
?>
</body>
</html>