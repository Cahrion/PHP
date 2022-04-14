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
		INNER JOIN 		= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerin birbiri ile ilişkilendirilebilmesi için kullanılır.
		LEFT JOIN 		= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun soldaki tabloya göre birbirleri ile ilişkilendirilebilmesi için kullanılır.
		RIGHT JOIN	 	= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun sağdaki tabloya göre birbirleri ile ilişkilendirilebilmesi için kullanılır.
		NATURAL JOIN 	= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerin birbiri ile otomatik ilişkilendirilebilmesi için kullanılır.
			USING			= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında ortak sütun koşlunu tanımlamak / belirtmek için kullanılır.
			ON 				= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında sütun koşlunu tanımlamak / belirtmek için kullanılır.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	// LEFT JOIN
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM kisiler LEFT JOIN siparisler ON kisiler.id = siparisler.uyeid", PDO::FETCH_ASSOC);
	if($Sorgu){ // id değeri bozulur ama alias eklenerek düzenlenir (Soldaki bütün verileri getirdiği için boş veriler de gelebilir.)
		$KayitSayisi 	= $Sorgu->rowCount();
		if($KayitSayisi > 0){
			foreach($Sorgu as $Kayitlar){
				echo $Kayitlar["id"] . " | ";
				echo $Kayitlar["adisoyadi"] . " | ";
				echo $Kayitlar["emailadresi"]. " | ";
				echo $Kayitlar["sifre"] . " | ";
				echo $Kayitlar["telefon"] . " | ";
				echo $Kayitlar["yas"] . " | ";
				echo $Kayitlar["cinsiyet"] . " | ";
				echo $Kayitlar["sehir"] . " | ";
				echo $Kayitlar["kayittarihi"] . " | ";
				echo $Kayitlar["uyeid"] . " | ";
				echo $Kayitlar["urunadi"] . " | ";
				echo $Kayitlar["urunfiyati"] . " <br> ";
			}
		}else{
			echo "Kayıt Bulunamadı.";
		}
	}else{
		echo "Sorgu Hatası A";
	}
	
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>