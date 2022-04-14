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
		$Isim 				= "Icabi";
		$Soyisim 			= "Kırgız";
	
		define("ESYA", "Masa");
		define("ARAC", "Vapur");
	
		const RENK			= "Mavi";
		const YAZILIMDILI	= "PHP";
	
		$Degerler 		= array($Isim,$Soyisim,ESYA,ARAC,RENK,YAZILIMDILI,"Sinema");
	
		echo "<pre><br>";
		print_r($Degerler);	
		echo "</pre><br><br>";
	
	?>
</body>
</html>