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
	
		CREATE DATABASE 	= MySQL sunucusuna yeni bir database ekleme / oluşturma için kullanılır.
		CREATE TABLE 		= MySQL sunucusundaki database içerisine yeni bir tablo ekleme / oluşturma için kullanılır. Ayrıca istenirse herhangi bir tablo içeriklerini başka bir tobloyada kopyalamak için kullanılır.
	*/
	
	// Nesnesel yapi ile
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . $VeritabaniBaglantisi->connect_error . "<br>";
		die();
	}
	echo "Veritabanına bağlantı kuruldu. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("CREATE TABLE uyeler (
		id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		adi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
		soyadi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
		EmailAdresi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
		Durumu tinyint(1) UNSIGNED NOT NULL,
		KayitTarihi timestamp NOT NULL DEFAULT current_timestamp,
		YoneticiAciklamasi longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
	)ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci"); 
	// Ek olarak hangi motorla çalışacağı ve varsayılan isimde eklendi.
	
	if($Sorgu){
		echo "Tablo Oluşturuldu.";
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>