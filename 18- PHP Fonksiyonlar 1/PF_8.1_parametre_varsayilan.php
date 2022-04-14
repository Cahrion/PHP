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
		function IslemYap($Isim="Bilinmiyor", $Soyisim="Bilinmiyor", $Yas="Bilinmiyor"){ // (19) varsayılan değer
			if($Isim != "Bilinmiyor"){
				echo "Gelen Isim: " . $Isim . "<br>";
			}
			if($Soyisim != "Bilinmiyor"){
				echo "Gelen Soyisim: " . $Soyisim . "<br>";
			}
			if($Yas != "Bilinmiyor"){
				echo "Gelen Yas: " . $Yas;
			}
			echo "<br><br>";
		}
	
		IslemYap("Icabi"); // Hiçbir değer verilmezken
		IslemYap("Aslı", "Kaya", 20); // Bütün değerleri verirken
		IslemYap("Umut", "Cesur"); // Yas değeri yok
	
	?>
</body>
</html>