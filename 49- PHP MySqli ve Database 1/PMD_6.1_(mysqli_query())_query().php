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
	
		mysqli_query() 	= MySQL sunucusuna açılmış olan bir bağlantı dahilinde yeni bir sorgu yapmak için kullanılır. Ayrıca sorgu işlemi ile alakalı tüm bilgileri bulur ve bulduğu değerlerden yeni bir dizi oluşturur. Oluşturduğu dizi değerini geriye döndürür.
		query() 		= MySQL sunucusuna nesnesel yapı ile açılmış olan bir bağlantı dahilinde yeni bir sorgu yapmak için kullanılır. Ayrıca sorgu işlemi ile alakalı tüm bilgileri bulur ve bulduğu değerlerden yeni bir dizi oluşturur. Oluşturduğu dizi değerini geriye döndürür.
	
	*/
	
	
	
	@$VeritabaniBaglantisi 	= mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		echo "1. Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . $VeritabaniBaglantisi->connect_error . "<br>";
		die();
	}
	echo "1. Veritabanına bağlantı kuruldu. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	// İleri düzey bağlanma biçimi ... (Standart yapı)
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM kayitlar");
	
	if($Sorgu){
		echo "<pre>";
		print_r($Sorgu);
		echo "<pre>";
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>