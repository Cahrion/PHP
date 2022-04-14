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
			strftime() 		=	Yerel tarih ve saat bilgilerini belirtilecek olan formata göre biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
			strftoime() 	=	İngilizce metin içerikli bir zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
		*/
	
	$Zaman 			=	date("Y-m-d");
	$ZamanDamgasi 	=	strtotime($Zaman);
	
	$Sonuc			= 	strtotime("1 day", strtotime($Zaman)); // Zaman dalgasına 1 gün ekleyerek geriye döndürür.
	
		echo "Zaman: " . $Zaman . "<br>";
		echo "Zaman Damgasi: " . $ZamanDamgasi . "<br>";
		echo "Yeni Zaman Damgasi: " . $Sonuc;
	
	?>
</body>
</html>