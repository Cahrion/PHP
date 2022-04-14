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
	
	$Icerik 			= "Icabi kırgız - IK system and extra eğitim - a'dan z'ye PHP notları.";
	
	echo $Icerik . "<br>";
	
	$BuyukIcerik 		= mb_convert_case($Icerik, MB_CASE_UPPER, "UTF-8");  // Kelimeleri büyük yapar. (Türkçe sorunu var)
	
	echo $BuyukIcerik . "<br>";
	
	$SadeceBaslikIcerik	= mb_convert_case($Icerik, MB_CASE_TITLE, "UTF-8"); // Kelime başlıklarını büyük yapar. (Türkçe sorunu var)
		
	echo $SadeceBaslikIcerik . "<br>";
		

	
	?>
</body>
</html>