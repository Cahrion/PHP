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
	
	$BuyukIcerik 		= strtoupper($Icerik); // türkçe karakterler bozuk çıktı.
	
	echo $BuyukIcerik . "<br>";
	
	$MB_BuyukIcerik 	= mb_strtoupper($Icerik, "UTF-8"); // 2. Parametreye kodlama adı girilir ve denenir.
	// Türkçeleştirme işlemini belli başlı düzeltir (i = I sorunu haric)
	
	echo $MB_BuyukIcerik . "<br>";
		

	
	?>
</body>
</html>