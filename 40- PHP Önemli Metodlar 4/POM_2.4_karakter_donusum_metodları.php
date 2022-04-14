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
		ucwords() 	=	Belirtilecek olan içerikte bulunan tüm kelimelerin ilk harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
		ucfirst() 	=	Belirtilecek olan içeriğinilk harfini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
		lcfirst() 	= 	Belirtilecek olan içeriğinilk harfini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	*/
	// Bunları kullanmak yerine burdan her kelimenin ilk harfi büyütebilirsiniz.
	
	function HerKelimeninIlkHarfiniBuyukYap($Deger){
		$Kelimeler					= explode(" ", $Deger);
		$KucuktenBuyugeDegisecekler = array("ç", "ğ", "ı","i", "ö", "ş", "ü");
		$KucuktenBuyugeDegisenler 	= array("Ç", "Ğ", "I","İ", "Ö", "Ş", "Ü");
		
		foreach($Kelimeler as $siralar => $Eleman){
			$Uzunluk			= strlen($Eleman); 
			$IlkHarfiBul 		= mb_substr($Eleman, 0,1,"UTF-8");
			$KalanIcerigiBul 	= mb_substr($Eleman, 1,$Uzunluk,"UTF-8"); 
			$IlkHarfiDuzelt	 	= strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul));
			global $Metin;
			
			$Metin 			.= $IlkHarfiDuzelt . $KalanIcerigiBul . " ";
		}
		return $Metin;
	}
	
	$Icerik 			= "icabi kırgız  IK system and extra eğitim - a'dan z'ye PHP notları.";
		echo $Icerik . "<br><br>";
	$Metin 		= HerKelimeninIlkHarfiniBuyukYap($Icerik);
		echo $Metin;
		
		
	?>
</body>
</html>