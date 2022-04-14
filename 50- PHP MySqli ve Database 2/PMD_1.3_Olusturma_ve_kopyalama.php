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
	
	
	
	$VeritabaniBaglantisi 	= @mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		echo "Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . mysqli_connect_error() . "<br>";
		die();
	}
	echo "Veritabanına bağlantı kuruldu. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "CREATE TABLE uyeler (
		id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
	)"); // Sadece id eklenmiş.
	
	if($Sorgu){
		echo "Tablo Oluşturuldu.";
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>