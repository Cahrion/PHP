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
	
		TRUNCATE TABLE 	=  MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm içeriklerini boşaltmak / sıfırlamak için kullanılır.
		// (id) değerleri de otomatik sıfırlanır. 
	*/
	
	// Nesne yapısıyla
	
	@$VeritabaniBaglantisi = new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Baglanti hatası <br>";
		echo "Hata içeriği: " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	echo "Bağlanti sağlandı. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("TRUNCATE TABLE uyeler");
	
	if($Sorgu){
		echo "Veritabanı tablosu sıfırlandı.";
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>