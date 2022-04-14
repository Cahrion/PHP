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
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . $VeritabaniBaglantisi->connect_error . "<br>";
		die();
	}
	echo "Veritabanına bağlantı kuruldu. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("CREATE TABLE timetube.kayitlar2 LIKE cahrion.uyeler"); // Başka veritabanlarından da kopyalanabilir. ("cahrion" veritabanındaki "uyeler" tablosunu "timetube" veritabanındaki "kayitlar2" adında kopyaladı.)
	if($Sorgu){
		echo "Tablo Kopyalandı.";
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>