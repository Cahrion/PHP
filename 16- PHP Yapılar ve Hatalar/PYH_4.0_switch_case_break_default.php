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
	
	$Deger 		= 10;
	
	switch($Deger){
		case $Deger < 10:
			echo "Değer 10'dan küçük";
			break;
		case $Deger > 10:
			echo "Değer 10'dan büyük";
			break;
		default:
			echo "Değer 10'a eşit";
			
	}
	
	
	
	?>
</body>
</html>