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
		var_export() 	= Belirtilecek olan herhangi bir değişkenin çözümlenebilir gösterimini bularak bulduğu gösterimin ekran çıktılanmasını sağlamak için kullanılır.
	*/
	
	$Isim		= "Icabi";
	$Tarih		= 2021;
	
	echo $Isim . "<br>";
	
	var_export($Isim); // String olduğu için yanlarında tiklerle gelir.
	echo "<br>";
	var_export($Tarih); // İnteger değer yanlarında tiklerle gelmez.

	?>
</body>
</html>