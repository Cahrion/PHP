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
	
	// Referanslı olarak atamak için "&" kullanılır.
	$Deger1 	= "Icabi Kırgız";
	$Deger2 	= &$Deger1;
	
	echo "<br>";
	echo $Deger1;
	echo "<br>";
	echo $Deger2;
	echo "<br>";
	
	$Deger1 	= "Hakan Karatepe"; 
	
	echo "<br>";
	echo $Deger1;
	echo "<br>";
	echo $Deger2;
	echo "<br>";
	
	$Deger2 	= "Altun Karatepe"; // Değer2'nin de değeri değişince Deger1'de değişir değiştirilmiş
	
	echo "<br>";
	echo $Deger1;
	echo "<br>";
	echo $Deger2;
	echo "<br>";
	
?>
</body>
</html>