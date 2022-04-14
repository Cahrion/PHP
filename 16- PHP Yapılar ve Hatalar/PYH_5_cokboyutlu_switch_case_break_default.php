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
	
	$Saat 		= 14;
	
	switch($Saat){
		case ($Saat >= 0) and ($Saat <= 6):
			switch($Saat){
				case ($Saat == 0):
					echo "Iyi geceler. Saat 00:00";
					break;
				case ($Saat == 1):
					echo "Iyi geceler. Saat 01:00";
					break;
				case ($Saat == 2):
					echo "Iyi geceler. Saat 02:00";
					break;
				case ($Saat == 3):
					echo "Iyi geceler. Saat 03:00";
					break;
				case ($Saat == 4):
					echo "Iyi geceler. Saat 04:00";
					break;
				case ($Saat == 5):
					echo "Iyi geceler. Saat 05:00";
					break;
				case ($Saat == 6):
					echo "Iyi geceler. Saat 06:00";
					break;
			}
			break;
		case ($Saat > 6) and ($Saat <= 12):
			switch($Saat){
				case ($Saat == 7):
					echo "Günaydın. Saat 07:00";
					break;
				case ($Saat == 8):
					echo "Günaydın. Saat 08:00";
					break;
				case ($Saat == 9):
					echo "Günaydın. Saat 09:00";
					break;
				case ($Saat == 10):
					echo "Günaydın. Saat 10:00";
					break;
				case ($Saat == 11):
					echo "Günaydın. Saat 11:00";
					break;
				case ($Saat == 12):
					echo "Günaydın. Saat 12:00";
					break;
			}
			break;
		case ($Saat > 12) and ($Saat <= 18):
			switch($Saat){
				case ($Saat == 13):
					echo "İyi Günler. Saat 13:00";
					break;
				case ($Saat == 14):
					echo "İyi Günler. Saat 14:00";
					break;
				case ($Saat == 15):
					echo "İyi Günler. Saat 15:00";
					break;
				case ($Saat == 16):
					echo "İyi Günler. Saat 16:00";
					break;
				case ($Saat == 17):
					echo "İyi Günler. Saat 17:00";
					break;
				case ($Saat == 18):
					echo "İyi Günler. Saat 18:00";
					break;
			}
			break;
		case ($Saat > 18) and ($Saat <= 23):
			switch($Saat){
				case ($Saat == 19):
					echo "İyi Akşamlar. Saat 19:00";
					break;
				case ($Saat == 20):
					echo "İyi Akşamlar. Saat 20:00";
					break;
				case ($Saat == 21):
					echo "İyi Akşamlar. Saat 21:00";
					break;
				case ($Saat == 22):
					echo "İyi Akşamlar. Saat 22:00";
					break;
				case ($Saat == 23):
					echo "İyi Akşamlar. Saat 23:00";
					break;
			}
			break;
		default:
			echo "Bilinmeyen bir saat dilimi";
	}
	
	
	?>
</body>
</html>