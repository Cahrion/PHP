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
				function Uc(){
					function Dort(){
						function Bes(){
							echo "Burası Bes adındaki fonksiyonun içerisidir.";
						}
						echo "Burası Dort adındaki fonksiyonun içerisidir." . "<br>";
					}
					echo "Burası Uc adındaki fonksiyonun içerisidir." . "<br>";
				}	
				echo "Burası Iki adındaki fonksiyonun içerisidir." . "<br>";
			}
			echo "Burası Bir adındaki fonksiyonun içerisidir." . "<br>";
		}
	
		Bir(); // Çağırmadan #Iki fonksiyonu getirilemez.
		Iki();
		Uc();
		Dort();
		Bes();
	?>
</body>
</html>