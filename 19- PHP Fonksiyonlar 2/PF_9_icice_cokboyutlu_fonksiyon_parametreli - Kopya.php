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
		function Bir($Isim, $Soyisim){
			function Iki($Meslek, $Yas){
				
				echo $Yas . " " . $Meslek . "<br>";
			}
			
			echo $Isim . " " . $Soyisim . "<br>";
		}
	
		Bir("Icabi", "Kırgız"); // Çağırmadan #Iki fonksiyonu getirilemez.
		Iki("Yazılımcı", "19");
	?>
</body>
</html>