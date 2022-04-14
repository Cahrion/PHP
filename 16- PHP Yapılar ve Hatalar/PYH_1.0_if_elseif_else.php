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
	
	$Deger1 	= 1;
	$Deger2 	= 31;
	$Deger3 	= 32;
	
	if(($Deger1 > $Deger2) and ($Deger1 > $Deger3)){
		echo $Deger1 . " En büyük sayıdır.";
	}elseif(($Deger2 > $Deger1) and ($Deger2 > $Deger3)){
		echo $Deger2 . " En büyük sayıdır.";
	}else{
		echo $Deger3 . " En büyük sayıdır.";
	}


	?>
</body>
</html>