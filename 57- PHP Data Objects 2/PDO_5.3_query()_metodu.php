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
	
		query() 	= MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		fetch() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için query() metodu kullanılarak hazırlanmış olan query'in (sorgunun) verilerini okumak için kullanılır. Ayrıca istenirse verilere  erişim şeklide belirtilebilir.
		fetchAll() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun coğul veri okuma işlemi için query() metodu kullanılarak hazırlanmış olan query'in (sorgunun) verilerini okumak için kullanılır. Ayrıca istenirse verilere  erişim şeklide belirtilebilir.
			FETCH_ASSOC 	= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
			FETCH_NUM	 	= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları php tarafından otomatik tanımlanır (0,1,2,3,4...) ve ilgili verilere sütun sıra numaraları ile erişilir.
			FETCH_BOTH	 	= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleriyle hemde php tarafından otomatik tanımlanır (0,1,2,3,4...) ve ilgili verilere ister sütun isimleriyle ister sütun sıra numaraları ile erişilir.
			FETCH_OBJ	 	= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede  ilgili tabloda sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleriyle erişilir.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
		
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}	
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT isim AS KISIADI,beceriler AS YETENEKLERI FROM uyeler"); // Alias adlariyla gelir.
	if($Sorgu){
		foreach($Sorgu as $Satirlar){
			echo "<pre>";
			print_r($Satirlar);
			echo "<pre>";
			
			echo "ID: " . $Satirlar["KISIADI"] . " | ";
			echo $Satirlar["YETENEKLERI"] . " <br> ";
		}
	}else{
		echo "Sorgu Hatası";
	}
	
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>