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
		prepare() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre query hazırlamak için kullanılır.
		bindparam() 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) derlemek için kullanılır.
		bindvalue() 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) derlemek için kullanılır.
			PDO::PARAM_BOOL	= Boolean 
			PDO::PARAM_NULL	= Null
			PDO::PARAM_INT	= Integer
			PDO::PARAM_STR	= String
			
		execute() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) çalıştırmak için kullanılır.
		fetch() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve sonuçları alınmış olan query'nin verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şeklide belirtilebilir.
		fetchall() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun çoğul veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış, execute() metodu kullanılarak çalıştırılmış ve sonuçları alınmış olan query'nin verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şeklide belirtilebilir.
			FETCH_ASSOC		= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarı olarak tanımlanır ve ilgili verilere sütun isimleriyle erişilir.
			FETCH_NUM		= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları php tafarafından otomatik olarak tanımlanır. (0, 1, 2, 3) ve ilgili verilere sütun sıra numaraları ile erişilir.
			FETCH_BOTH		= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hem de php tafarafından otomatik olarak tanımlanır. (0, 1, 2, 3) ve ilgili verilere ister sütun isimleriyle ister sütun sıra numaralarıyla erişilebilir.
			FETCH_OBJ		= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleriyle erişilir.
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	// prepare yapısıyla --> Yazma (Write) yapısı
	
	$GelenIsim 		= "Sudem Ekin";
	$GelenMail 		= "Sudem@gmail.com";
	$GelenSifre 	= "8979465132S";
	$GelenTelefon 	= "05483861984";
	$GelenYas 		= 17;
	$GelenCinsiyet 	= "Kadın";
	$GelenSehir		= "İstanbul";
	
	$Sorgu 	= $VeritabaniBaglantisi->prepare("INSERT INTO kisiler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values (?, ?, ?, ?, ?, ?,
	?)"); 
	$Sorgu->bindParam(1, $GelenIsim, PDO::PARAM_STR); // Bu yapıyla da yapılabilir.
	$Sorgu->bindParam(2, $GelenMail, PDO::PARAM_STR);
	$Sorgu->bindParam(3, $GelenSifre, PDO::PARAM_STR);
	$Sorgu->bindParam(4, $GelenTelefon, PDO::PARAM_STR);
	$Sorgu->bindParam(5, $GelenYas, PDO::PARAM_INT);
	$Sorgu->bindParam(6, $GelenCinsiyet, PDO::PARAM_STR);
	$Sorgu->bindParam(7, $GelenSehir, PDO::PARAM_STR);
	
	$Sorgu->execute(); 
		if($Sorgu){
			echo "Kayıt Eklendi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>