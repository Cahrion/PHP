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
	// Öneriler => Sayısal verilerde kullanmak.
	
		str_split() 	= Belirtilecek olan içeriği, belirtilecek olan karakter sayısına göre bölerek, bölümleme işleme sonucunda oluşan değerlerden yeni bir dizi oluşturarak oluşturduğu değeri geriye döndürür.
		mb_split() 		= Belirtilecek olan içeriği, belirtilecek olan düzenli ifade dahilinde bölerek, bölümleme işleme sonucunda oluşan değerlerden yeni bir dizi oluşturarak oluşturduğu değeri geriye döndürür.
		
		strtok() 		= Belirtilecek olan içeriği, belirtilecek olan ayrac doğrultusunda kontrol ederek eşleşen ayraç değeri olması durumunda ilk eşleşen ayracın öncesinde bulunan değeri bularak bulduğu değeri geriye döndürür. Ayrıca eşleşen tüm ayracların öncesinde bulunan değerler de herhangi bir döngü yardımı ile tek tek elde edilebilir.
		strpbrk() 		= Belirtilecek olan içeriği, belirtilecek olan ayrac doğrultusunda kontrol ederek eşleşen ayraç değeri olması durumunda ilk eşleşen ayracın sonrasında bulunan değeri bularak bulduğu değeri geriye döndürür.
	
	*/
	
	$deger 		= "Extra Eğitim - Icabi Kırgız - A'dan Z'ye PHP Görsel Eğitim Seti Öğrencisi";
	echo $deger . "<br>";
	
	$Islem		= strtok($deger, "-");
	echo $Islem . "<br><br><br>";
	
	while($Islem !== false){
		echo $Islem . "<br>";
		$Islem		= strtok("-");
	}

	?>
</body>
</html>