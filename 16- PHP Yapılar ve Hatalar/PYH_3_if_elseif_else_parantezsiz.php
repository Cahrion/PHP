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
	Yapısı 		= 
	if(Koşul veya Koşullar):
		Kod blokları
	elseif(Koşul veya Koşullar):
		Kod blokları
	else:
		Kod blokları
	endif;
	*/
	
	$saat = 5;
	
	if(($saat >= 0) and ($saat < 6)):
		echo "İyi Geceler";
	elseif(($saat >= 6) and ($saat < 12)):
		echo "Günaydın";
	elseif(($saat >= 12) and ($saat < 18)):
		echo "İyi Günler";
	elseif(($saat >= 18) and ($saat < 23)):
		echo "İyi Akşamlar";
	else:
		echo "Hatalı saat girimi";
	endif;
	
	
	?>
</body>
</html>