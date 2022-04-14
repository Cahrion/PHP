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
	
		$Degerler 		= array("Volkan","Hakan",array("Mavi", "Kırmızı","Sarı","Siyah"),"Onur","Serkan");
			
			
		echo "<pre>";
		print_r($Degerler);
		echo "</pre>";
	
		echo $Degerler[0] . "<br>";
		echo $Degerler[1] . "<br>";
		print_r($Degerler[2]);
		echo "<br>" . $Degerler[3] . "<br>";
		echo $Degerler[4] . "<br>";
	
	?>
</body>
</html>