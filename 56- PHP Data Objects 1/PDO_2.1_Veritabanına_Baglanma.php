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
	
		PDO() 			= Kendisine verilen parametreler doğrultusunda, mySQL sunucusuna yeni bir bağlantı açmak için kullanılır.
		PDOException 	= MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hatayı yakalamak için kullanılır.
		getMessage() 	= MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata açıklama değerini bularak, bulduğu değeri geriye döndürür.
	
	*/
	
	$VeritabaniBaglantisi	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	
	echo "<pre>";
	print_r($VeritabaniBaglantisi); // Çıktı PDO object ise çalışmıştır.
	echo "<pre>";
	
	$VeritabaniBaglantisi 	= null; // Veritabanini kapatmaya yarar. 
	?>
</body>
</html>