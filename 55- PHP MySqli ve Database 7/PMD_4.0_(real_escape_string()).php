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
		
		mysqli_real_escape_string() 	= Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterlerin (\, ', ") önüne \ (ters slash) işareti / kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak oluşturduğu değeri geriye döndürür.
		real_escape_string() 			= Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterlerin (\, ', ") önüne nesnesel yapı ile \ (ters slash) işareti / kaçırma operatörü ekler ve sade bir metin içeriği oluşturarak oluşturduğu değeri geriye döndürür.
		
	*/
	
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Deger 	= "Extra Eğitim - Volkan Alakent - A'dan Z'ye PHP Görsel Eğitim Seti - 32\" Monitör - Birde \ yazıyım.";
	echo $Deger . "<br>";
	
	$Islem 	= mysqli_real_escape_string($VeritabaniBaglantisi, $Deger);
	echo $Islem;
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>