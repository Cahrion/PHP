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
	
	$Icerik 		= "Icabi,Kırgız,icabikrz@gmail.com,0564 591 75 55,İstanbul";
	$Dosya 			= "Harici/Ornek2.csv";
	$DosyaAc		= fopen($Dosya, "w"); 
	$TurkceIcerik	= iconv("utf-8", "iso-8859-9", $Icerik);
	fputcsv($DosyaAc, explode(",", $TurkceIcerik), ";");
	
	fclose($DosyaAc);
	?>
</body>
</html>