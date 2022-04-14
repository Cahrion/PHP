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
		CREATE TABLE 		= MySQL sunucusuna database içerisine yeni bir tablo ekleme / oluşturma için kullanılır. Ayrıca istenirse herhangi bir tablo içeriklerini başka bir tabloya kopyalamak için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;charset=UTF8", "root", ""); // dbname ekledik.
		echo "Veritabanı Bağlantısı Kuruldu. <br>";
		
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	// exec() yapısına örnek
	
	$Sorgu 	= $VeritabaniBaglantisi->exec("CREATE TABLE cahrion.ornekyedek LIKE timetube.ornek");  // "timetube" veritabanındaki "ornek" adındaki tabloyu "cahrion" veritabanında "ornekyedek" adında kopyaladı.
		if($Sorgu !== false){
			echo "Tablo Oluşturuldu";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi = null;
	?>
</body>
</html>