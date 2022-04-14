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
	switch 		=	Koşul başlat
	case 		=	Koşul kontrol et
	break 		=	Koşul kontrolunu sonlandır.
	default		=	Koşul olumsuzlukları sonucu
	
	YAPISI		=
	
		switch(Koşul){
			case Kontrol ifadesi:   
				Kod blokları
				break;
			default:
				Kod blokları
		}
	*/
	
	$Saat 		= 10;
	
	switch($Saat){
		case ($Saat >= 0) and ($Saat <= 6):
			echo "Iyi geceler.";
			break;
		case ($Saat > 6) and ($Saat <= 12):
			echo "Günaydın";
			break;
		case ($Saat > 12) and ($Saat <= 18):
			echo "Iyi Günler.";
			break;
		case ($Saat > 18) and ($Saat <= 23):
			echo "Iyi akşamlar";
			break;
		default:
			echo "Bilinmeyen bir saat dilimi";
	}
	
	
	?>
</body>
</html>