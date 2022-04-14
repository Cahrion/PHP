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
	
	
	
	$VeritabaniBaglantisi 	= @mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		echo "1. Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . mysqli_connect_error() . "<br>";
		die();
	}
	echo "1. Veritabanına bağlantı kuruldu. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kayitlar");
	
	if($Sorgu){
		echo "<pre>";
		print_r($Sorgu);
		echo "<pre>";
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>