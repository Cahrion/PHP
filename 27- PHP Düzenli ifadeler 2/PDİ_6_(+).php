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
		/*
			+	 =	Düzenli ifade dahilinde kontrol edilecek olan içerigin karakter dizilimde bulunan değerin bir defa yada daha fazla tekrarlanmış olması gerektiğini belirlemek için kullanılır.
		*/
	
	$Icerik 	= "Icabi Kırgız --- 19 -|-- CSS - PHP - JS - PYTHON --|- HTML ----- 2021";
	
	$Desen		= "/-+/"; // En az (1) defa  tekrarlanmış veya daha fazla defa tekrarlanmış olanlar
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>