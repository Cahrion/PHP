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
	// Bunları kullanmak yerine burdan ilk harfi büyütebilirsiniz.
	
	function IceriginSadeceIlkHarfiniBuyukHarfYap($Deger){
		$Uzunluk			= strlen($Deger); // Sonra öğretilcek.  (Metnin uzunluğunu bulur.)
		$IlkHarfiBul 		= mb_substr($Deger, 0,1,"UTF-8"); // Sonra öğretilcek.  (Metnin istenen yerinden keser ve alır.)
		$KalanIcerigiBul 	= mb_substr($Deger, 1,$Uzunluk,"UTF-8"); 
		
		$KucuktenBuyugeDegisecekler = array("ç", "ğ", "ı","i", "ö", "ş", "ü");
		$KucuktenBuyugeDegisenler 	= array("Ç", "Ğ", "I","İ", "Ö", "Ş", "Ü");
		
		$BuyuktenKucugeDegisecekler = array("Ç", "Ğ", "I","İ", "Ö", "Ş", "Ü");
		$BuyuktenKucugeDegisenler 	= array("ç", "ğ", "ı","i", "ö", "ş", "ü");
		
		
		$IlkHarfiDuzelt	 	= strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul));
		$KalanIcerigiDuzelt	= strtolower(str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul));
		$Sonuc 				= $IlkHarfiDuzelt . $KalanIcerigiDuzelt;
		return $Sonuc;
	}
	
	$Icerik 			= "iCABİ KIRGIZ - IK SYSTEM AND EXTRA EĞİTİM - A'DAN Z'YE PHP NOTLARI.";
	echo $Icerik . "<br><br>";

	$Metin 		= IceriginSadeceIlkHarfiniBuyukHarfYap($Icerik);
	echo $Metin;
		
	?>
</body>
</html>