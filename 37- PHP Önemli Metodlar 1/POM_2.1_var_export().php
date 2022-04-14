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
	
	$Isimler		= array("Icabi", "Aslı", "Umut");
	
	print_r($Isimler);
	echo "<br>";
	var_export($Isimler); 
	
	echo "<br><br><b>Düzenli Gösterim<br><br><br><pre>";
	print_r($Isimler);
	echo "<br>";
	var_export($Isimler); 
	echo "</pre>";
	
	?>
</body>
</html>