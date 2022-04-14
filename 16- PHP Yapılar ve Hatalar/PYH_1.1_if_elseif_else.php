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
		if 		= Eğer
		elseif 	= Değilse eğer
		else 	= Değilse
	
	YAPISI
		
		if(Koşul veya Koşullar){ (Bir kez kullanılır.)
		
		}elseif(Koşul veya Koşullar){ (Çok kez kullanılabilir.)
		
		}else{ (Bir kez kullanılır.)
		
		}
	*/
	
	$saat 	= 1;
	
	if(($saat == 1) or ($saat == 2) or ($saat == 3) or ($saat == 4)or ($saat == 5) or ($saat == 6)){
		echo "İyi geceler.";
	}elseif(($saat == 7) or ($saat == 8) or ($saat == 9) or ($saat == 10)or ($saat == 11) or ($saat == 12)){
		echo "Günaydın.";
	}elseif(($saat == 13) or ($saat == 14) or ($saat == 15) or ($saat == 16)or ($saat == 17) or ($saat == 18)){
		echo "İyi günler.";
	}elseif(($saat == 19) or ($saat == 20) or ($saat == 21) or ($saat == 22)or ($saat == 23) or ($saat == 24)){
		echo "İyi akşamlar.";
	}else{
		echo $Deger3 . " En büyük sayıdır.";
	}


	?>
</body>
</html>