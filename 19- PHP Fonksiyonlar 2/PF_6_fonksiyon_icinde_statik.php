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
	
		function Bir(){
			$Sayi 	= 0;
			$Sayi 	= $Sayi + 1;
			
			echo "Sayi Değeri: " . $Sayi . "<br>";
		}
	Bir();
	Bir();
	Bir();
	Bir();
	
		echo "<br><br>";
	
	
		function Iki(){
			static $Rakam 	= 0; // $Rakam 	= 1 (Üstteki değeri alır.)
			$Rakam 	= $Rakam + 1; // $Rakam 	= 1
			
			echo "Sayi Değeri: " . $Rakam . "<br>";
		}
	Iki();
	Iki();
	Iki();
	Iki();
	
	?>
</body>
</html>