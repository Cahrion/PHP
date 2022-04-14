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
	
		echo "10 x 50 = ";
	
	$Deger 	= 10 / 40; // Sadece sayısal şekilde yazmalıdır "10" gibi olmamalıdır. 
	
		echo $Deger;
	
	$Atama 	= 2;
	$Deger /= $Atama; // Bölünen değer 0 olmaz.
		
		echo "<br> Atamalı Bölen: 2 ";
		echo "<br> Atamalı Bölme:   ";
		echo $Deger;
	
	?>
</body>
</html>