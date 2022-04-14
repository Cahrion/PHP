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
		$Bir 		= "Icabi Kırgız";
	
		function Normal($Bir){
			$Bir 	= "Merhaba Benim Adım " . $Bir;
			echo $Bir . "<br>";
		}
		Normal($Bir);
		echo $Bir . "<br><br><br><br><br><br>";
	
		$Iki 		= "Can Kırgız"; // Merhaba Benim Adım Icabi Kırgız
	
		function Referansli(&$Iki){ // Fake atmak için ideal 
			$Iki 	= "Merhaba Benim Adım " . $Iki . " Üstteki yazı değişti.";
			echo $Iki . "<br>";
		}
		Referansli($Iki);
		echo $Iki . "<br><br><br><br><br><br>";
	?>
</body>
</html>