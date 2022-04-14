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
	
	switch():
		case Koşul:
			Kod blokları
			break;
		default:
			Kod blokları
	endswitch
	*/
	
	$saat = 9;
	
	switch($saat):
		case ($saat >= 0) and ($saat < 6):
			echo "İyi Geceler";
			break;
		case ($saat >= 6) and ($saat < 12):
			echo "Günaydın";
			break;
		case ($saat >= 12) and ($saat < 18):
			echo "İyi Günler";
			break;
		case ($saat >= 18) and ($saat < 23):
			echo "İyi Akşamlar";
			break;
		default:
			echo "Bilinmeyen saat dilimi";
	endswitch
	?>
</body>
</html>