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
	
	$Tarih 			=	strtotime("08 December 1980");
	$Suan 			=	strtotime("now");
	$Yarin 			=	strtotime("+1 day");
	$OncekiHafta 	=	strtotime("-1 week");
	$Gelismis 		=	strtotime("+1 year +3 month +5 day +8 hour");
	$Dondur 		= 	date("d.m.Y H.i.s", $Gelismis);
	
		echo "08 December 1980: " . $Tarih . "<br>";
		echo "Şuanın : " . $Suan . "<br>";
		echo "Yarın : " . $Yarin . "<br>";
		echo "1 Hafta once : " . $OncekiHafta . "<br>";
		echo "Gelismis: " . $Gelismis . "<br>";
		echo "Gelismis Döndür: " . $Dondur;
	
	?>
</body>
</html>