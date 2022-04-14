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
		strtoupper() 		= Belirtilecek olan içeriğin tüm karakterlerini büyük karakter olacak şekilde değiştirerek değiştirilmiş olan değeri geriye döndürür.
		mb_strtoupper() 	= Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak tüm karakterlerini büyük karakter olacak şekilde değiştirerek değiştirilmiş olan değeri geriye döndürür.
		strtolower() 		= Belirtilecek olan içeriğin tüm karakterlerini küçük karakter olacak şekilde değiştirerek değiştirilmiş olan değeri geriye döndürür.
		mb_strtolower() 	= Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak tüm karakterlerini küçük karakter olacak şekilde değiştirerek değiştirilmiş olan değeri geriye döndürür.
		mb_convert_case() 	= Belirtilecek olan içeriğin, belirtilecek olan dönüşüm türünde ve karakter kodlaması dahilinde gelişmiş olarak tüm karakterlerini değiştirerek değiştirilmiş olan değeri geriye döndürür.
			MB_CASE_UPPER	= Belirtilecek olan içeriğin tüm karakterlerini büyük karakter olacak şekilde değiştirerek değiştirilmiş olan değeri geriye döndürür.
			MB_CASE_LOWER	= Belirtilecek olan içeriğin tüm karakterlerini küçük karakter olacak şekilde değiştirerek değiştirilmiş olan değeri geriye döndürür.
			MB_CASE_TITLE	= Belirtilecek olan içeriğin tüm Kelimelerinin baş karakterlerini büyük karakter olacak şekilde değiştirerek değiştirilmiş olan değeri geriye döndürür.
	*/
	
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