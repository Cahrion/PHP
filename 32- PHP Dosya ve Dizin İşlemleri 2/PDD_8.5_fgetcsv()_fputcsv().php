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
			fgetcsv()	=	Belirtilecek olan "csv" dosyası içeriğini kontrol ederek ve bilgileri satır satır bularak bulduğu değeri geriye döndürür. Ayrıca tüm dosya içeriğinde bulunan satır verileri herhangi bir döngü yardımıyla elde edilebilir.
			fputcsv() 	=	Belirtilecek olan "csv" dosyasına, belirtilecek olan verileri yazmak için kullanılır. Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak,bulduğu değeri geriye döndürür.
		*/		
	
	$Icerik 		= array(
	"Icabi,Kırgız,icabikrz@gmail.com,5315649785,İstanbul",
	"Aslıgül,Kaya,asligul@gmail.com,5489512748,İstanbul",
	"Salih,Kırgız,Salihcan@gmail.com,YOK,Trabzon,",
	"Yusuf,Kahraman,Yusufcan@gmail.com,YOK,Giresun"
	);
	$Dosya 			= "Harici/Ornek2.csv";
	$DosyaAc		= fopen($Dosya, "w"); // Yazma yapar.
	
	foreach($Icerik as $Deger){
		fputcsv($DosyaAc, explode(",",iconv("utf-8","iso-8859-9",$Deger)), ";");
	}
	
	fclose($DosyaAc);
	?>
</body>
</html>