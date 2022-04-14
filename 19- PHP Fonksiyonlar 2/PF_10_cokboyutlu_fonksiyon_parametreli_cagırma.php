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
			Iki("Yazılımcı", "19");
		}
	
		Bir("Icabi", "Kırgız");
	
	?>
</body>
</html>