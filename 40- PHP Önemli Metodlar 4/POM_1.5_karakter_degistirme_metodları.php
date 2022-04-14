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
	
	function BuyukHafleriKucukHarflereCevir($Deger){
		$Degisecekler 	= array("Ç", "Ğ", "I","İ", "Ö", "Ş", "Ü");
		$Degisenler 	= array("ç", "ğ", "ı","i", "ö", "ş", "ü");
		$Duzenle	 	= str_replace($Degisecekler, $Degisenler, $Deger); // Sonra Öğretilcek.
		$Sonuc			= strtoupper($Duzenle);
		return $Sonuc;
	}
	
	
	$Icerik 			= "İCABİ KIRGIZ - IK SYSTEM AND EXTRA EĞİTİM - A'DAN Z'YE PHP NOTLARI.";
	
	echo $Icerik . "<br><br>";
	
	$Metin 		= BuyukHafleriKucukHarflereCevir($Icerik);
		
	echo $Metin;
		

	
	?>
</body>
</html>