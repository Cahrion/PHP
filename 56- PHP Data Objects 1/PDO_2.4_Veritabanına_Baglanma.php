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
	try{
		$VeritabaniBaglantisi	= new PDO("mysql:host=localhost:3307;dbname=cahrion", "root", "");
		$VeritabaniBaglantisi->exec("SET CHARACTER SET UTF8"); // Burada da karakter set tanımlaması yapılabilir.
		
		echo "Veritabanı Bağlantı Kuruldu";
	}catch(PDOException $HataMesaji){
		echo "Veritabanı Bağlantı Hatası <br>";
		echo "Hata Açıklaması: " . $HataMesaji->getMessage();
		die();
	} // Doğru kullanım tarzı böyledir.
	
	
	$VeritabaniBaglantisi 	= null; // Veritabanini kapatmaya yarar. 
	?>
</body>
</html>