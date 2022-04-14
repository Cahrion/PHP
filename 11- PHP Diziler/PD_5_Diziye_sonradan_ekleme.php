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
		$Degerler 					= array();
	
		$Degerler[]					= "Icabi";
		$Degerler["PHPEgitmeni"]	= "Volkan";
		$Degerler[]					= "Onur";
	
		echo "<pre><br>";
		print_r($Degerler);	
		echo "</pre>";
	
	?>
</body>
</html>