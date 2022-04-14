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
			function Iki(){
				
				echo "Burası iki adındaki fonksiyonun içerisidir.";
			}
			
			echo "Burası Bir adındaki fonksiyonun içerisidir." . "<br>";
		}
	
		Bir(); // Çağırmadan #Iki fonksiyonu getirilemez.
		Iki();
	?>
</body>
</html>