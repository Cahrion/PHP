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
		$Isimler 	= array("Icabi","Volkan");
		$Renkler 	= array("Mavi","Siyah","Beyaz");
		
		echo "<pre><br>";
		print_r($Degerler);	
		echo "</pre><br>";
	
		echo "<pre><br>";
		print_r($Degerler);	
		echo "</pre><br>";
	
		$Sonuc 		= $Isimler + $Renkler; // ilk diziyi ele alır sonradan geleni eler.
	
		echo "<pre><br>";
		print_r($Sonuc);	
		echo "</pre><br>";
	
		echo $Sonuc[0] . "<br>";
		echo $Sonuc[1] . "<br>";
		echo $Sonuc[2]
	?>
</body>
</html>