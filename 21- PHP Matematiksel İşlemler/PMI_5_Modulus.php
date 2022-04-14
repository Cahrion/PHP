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
	
		echo "41 % 2 = ";
	
	$Deger 	= 41 % 2; // float değerler integera çevrilir ve öyle kullanılır.
	
		echo $Deger;
	
	$Deger2 = 11;
	$Atama 	= 3;
	$Deger2 %= $Atama; 
		
		echo "<br> Değer: 11 <br>Atamalı Mödülüs: 2 ";
		echo "<br> Atamalı Mödülüs:   ";
		echo $Deger2;
	
	?>
</body>
</html>