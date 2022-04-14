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
	
	// INNER yapısı kullanmadan yapmak bu kadar uzun kod alır...
	
	$SorguA 	= $VeritabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_ASSOC);
	if($SorguA){
		$KayitSayisiA 	= $SorguA->rowCount();
		if($KayitSayisiA > 0){
			foreach($SorguA as $KayitlarA){
				$SorguB 	= $VeritabaniBaglantisi->query("SELECT * FROM siparisler WHERE uyeid=" . $KayitlarA["id"], PDO::FETCH_ASSOC);
				if($SorguB){
					$KayitSayisiB 	= $SorguB->rowCount();
					if($KayitSayisiB>0){
						foreach($SorguB as $KayitlarB){
							echo $KayitlarA["id"] . " | ";
							echo $KayitlarA["adisoyadi"] . " | ";
							echo $KayitlarA["emailadresi"]. " | ";
							echo $KayitlarA["sifre"] . " | ";
							echo $KayitlarA["telefon"] . " | ";
							echo $KayitlarA["yas"] . " | ";
							echo $KayitlarA["cinsiyet"] . " | ";
							echo $KayitlarA["sehir"] . " | ";
							echo $KayitlarA["kayittarihi"] . " | ";
							echo $KayitlarB["id"] . " | ";
							echo $KayitlarB["uyeid"] . " | ";
							echo $KayitlarB["urunadi"] . " | ";
							echo $KayitlarB["urunfiyati"] . " <br> ";
						}
					}
				}else{
					echo "Sorgu Hatası B <br>";
				}
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