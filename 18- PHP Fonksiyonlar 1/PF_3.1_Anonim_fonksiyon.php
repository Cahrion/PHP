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
		$Islem 		= array(
			"Volkan",
			"Hakan",
			function(){ // Anonim fonksiyon dizilerde kullanılabilir. (Closure Object)
				echo "Extra Egitim - Volkan Alakent";	
			},
			"Onur"
		);
	
		echo $Islem[0] . "<br>";
		echo $Islem[1] . "<br>";
		$Islem[2]();
		echo "<br>";
		echo $Islem[3] . "<br>";
	
	?>
</body>
</html>