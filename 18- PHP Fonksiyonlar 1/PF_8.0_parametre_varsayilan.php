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
		function IslemYap($Isim="Icabi", $Soyisim="Kırgız", $Yas=19){ // (19) varsayılan değer
			echo "Gelen Isim: " . $Isim . "<br>";
			echo "Gelen Soyisim: " . $Soyisim . "<br>";
			echo "Gelen Yas: " . $Yas . "<br><br>";
			
		}
	
		IslemYap(); // Hiçbir değer verilmezken
		IslemYap("Aslı", "Kaya", 20); // Bütün değerleri verirken
		IslemYap("Umut", "Cesur"); // Yas değeri yok
	
	?>
</body>
</html>