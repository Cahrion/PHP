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
	
	// RIGHT JOIN
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT  
	kisiler.id AS KullaniciID,
	kisiler.adisoyadi AS Kullaniciadsoyad,
	kisiler.emailadresi AS KullaniciEmail,
	kisiler.sifre AS KullaniciSifre,
	kisiler.telefon AS KullaniciTelefon,
	kisiler.yas AS KullaniciYas,
	kisiler.cinsiyet AS KullaniciCins, 
	kisiler.sehir AS KullaniciSehir,
	kisiler.kayittarihi AS KullaniciTarih,
	siparisler.id AS SiparisID,
	siparisler.uyeid AS SiparisKullaniciID,
	siparisler.urunadi AS SiparisUrun,
	siparisler.urunfiyati AS SiparisFiyat
	FROM kisiler RIGHT JOIN siparisler ON kisiler.id = siparisler.uyeid", PDO::FETCH_ASSOC);
	if($Sorgu){ // Alias tanımlanıyınca (RIGHT JOIN)'de "id" sorunu düzelir.
		$KayitSayisi 	= $Sorgu->rowCount();
		if($KayitSayisi > 0){
			foreach($Sorgu as $Kayitlar){
				echo $Kayitlar["KullaniciID"] . " | ";
				echo $Kayitlar["Kullaniciadsoyad"] . " | ";
				echo $Kayitlar["KullaniciEmail"]. " | ";
				echo $Kayitlar["KullaniciSifre"] . " | ";
				echo $Kayitlar["KullaniciTelefon"] . " | ";
				echo $Kayitlar["KullaniciYas"] . " | ";
				echo $Kayitlar["KullaniciCins"] . " | ";
				echo $Kayitlar["KullaniciSehir"] . " | ";
				echo $Kayitlar["KullaniciTarih"] . " | ";
				echo $Kayitlar["SiparisID"] . " | "; 
				echo $Kayitlar["SiparisKullaniciID"] . " | ";
				echo $Kayitlar["SiparisUrun"] . " | ";
				echo $Kayitlar["SiparisFiyat"] . " <br> ";
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