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
		@ 	= 	önüne gelirse hatayı göstermez ve devam eder.
	*/
	
	$Deger 	= "19";
	
	echo $Deneme; // WARNING ERROR
	
	echo "-------";
	
	echo @$Deneme . "<br>"; // Normalde çalışır lakin eğer yoksa çalışmaz.
	echo @$Deger;
	
	?>
</body>
</html>