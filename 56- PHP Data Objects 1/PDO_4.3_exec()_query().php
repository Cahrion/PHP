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
		exec() 		= MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işleminde etkilenen kayıt sayısını bulmak için kullanılır. SELECT parametresi haricinde diğer CRUD işlemlerini yapabilir.
		query() 	= MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
			FETCH_ASSOC	= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarı olarak tanımlanır ve ilgili verilere sütun isimleriyle erişilebilir.
			FETCH_NUM	= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır (0,1,2,3,4). ve ilgili verilere sütun sıra numaralarıyla erişilebilir.
			FETCH_BOTH	= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleriyle hemde PHP tarafından otomatik olarak tanımlanır (0,1,2,3,4). ve ilgili verilere sütun isimleriyle istersek te sütun sıra numaralarıyla erişilebilir.
			FETCH_OBJ	=Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
		echo "Veritabanına Bağlantı Kuruldu <br>";
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
		
	$Sorgu 	= $VeritabaniBaglantisi->exec("INSERT INTO kisiler (adisoyadi) values ('Deneme Isim Soyisim')"); // 

	echo "İşlemde etkilenen kayıt sayısı: " . $Sorgu;
	
	
	$VeritabaniBaglantisi = null;
	?>
</body>
</html>