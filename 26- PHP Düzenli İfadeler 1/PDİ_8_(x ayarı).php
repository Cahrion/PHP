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
			x	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin, desende bulunan boşluğun etkisiz hale getirerek kontrol edilmesini sağlar.
		*/
	
	$Icerik 		= "Merhaba Benim Adım Icabi Kırgız, Ben Bir PHP Ögrencisiyim. Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";

	$Desen		= "/ P H P /x"; // (x) parametresi boşlukları yokmuş varsayar ve boşluksuz halini arar.
	
	preg_match($Desen, $Icerik, $Sonuc);
	
		echo "Orjinal İçerik: <br>" .$Icerik . "<br><br>";
		echo "Desen: {$Desen} <br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>