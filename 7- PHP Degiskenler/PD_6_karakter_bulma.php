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
	
	$isim 		= "Icabi Kırgız";
	
	echo $isim[0] . "<br>"; // indis değeri [0]'dan başlar.'
	echo $isim[1] . "<br>"; 
	echo $isim[2] . "<br>"; 
	echo $isim[3] . "<br>"; 
	echo $isim[4] . "<br>"; 
	echo $isim[5] . "<br>"; 
	echo $isim[6] . "<br>"; 
	echo $isim[7] . "<br>"; // türkçe karakterlerde iki bit alan alır ve iki sıra alır. (ı)
	echo $isim[8] . "<br>"; // türkçe karakterlerde iki bit alan alır ve iki sıra alır. (ı)
	echo $isim[9] . "<br>"; 
	echo $isim[10] . "<br>"; 
	echo $isim[11] . "<br>"; // türkçe karakterlerde iki bit alan alır ve iki sıra alır. (ı)
	echo $isim[12] . "<br>"; // türkçe karakterlerde iki bit alan alır ve iki sıra alır. (ı)
	echo $isim[13] . "<br>"; 
	
?>
</body>
</html>