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
	
		$Degerler 		= array("Volkan","Hakan",array("Mavi", "Kırmızı","Sarı","Siyah",array("Masa", "Sandalye","Sehpa")),"Onur","Serkan");
			
			
		echo "<pre>";
		print_r($Degerler);
		echo "</pre>";
	
		echo $Degerler[0] . "<br>";
		echo $Degerler[1] . "<br>";
		echo "~ " . $Degerler[2][0] . "<br>";
		echo "~ " . $Degerler[2][1] . "<br>";
		echo "~ " . $Degerler[2][2] . "<br>";
		echo "~ " . $Degerler[2][3] . "<br>";
		echo "~~ " . $Degerler[2][4][0] . "<br>";
		echo "~~ " . $Degerler[2][4][1] . "<br>";
		echo "~~ " . $Degerler[2][4][2] . "<br>";
		echo $Degerler[3] . "<br>";
		echo $Degerler[4] . "<br>";
	
	?>
</body>
</html>