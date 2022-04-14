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
		var 	= Herhangi bir sınıf içerisinde standart değişken tanımlamak için kullanılır.
	*/
	
	class Deney{
		
		var $Isim 		= "İcabi";
		
	}
	
	$Islem 		= new Deney;
	echo $Islem->Isim;
	
	?>
</body>
</html>