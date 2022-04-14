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
	
		INNER JOIN 		= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerin birbirleriyle ilişkilendirilmesi için kullanılır. 
		LEFT JOIN 		= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun soldaki tabloya göre birbirleriyle ilişkilendirilmesi için kullanılır.
		RIGHT JOIN 		= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun sağdaki tabloya göre birbirleriyle ilişkilendirilmesi için kullanılır.
		NATURAL JOIN 	= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerin birbirleriyle otomatik ilişkilendirilmesi için kullanılır. 
		
		USING 			= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleriyle ilişkilendirilmesi sırasında ortak sütun koşulunu tanımlamak / belirtmek için kullanılır.
		ON				= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleriyle ilişkilendirilmesi sırasında sütun koşulunu tanımlamak / belirtmek için kullanılır.
	*/
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT 
	kisiler.id AS KisiID,
	kisiler.adisoyadi AS KisiAdSoyad,
	kisiler.yas AS KisiYas,
	kisiler.sehir AS KisiSehir,
	istatistikler.id AS IstatistikID,
	istatistikler.uyeid AS IstatistikKisiID,
	istatistikler.siteyegirissayisi AS IstatistikGirisSayisi,
	istatistikler.siparissayisi AS IstatistikSiparisSayisi,
	siparisler.id AS SiparisID,
	siparisler.uyeid AS SiparisKisiID,
	siparisler.urunadi AS SiparisUrunAdi,
	siparisler.urunfiyati AS SiparisUrunFiyati
	FROM kisiler INNER JOIN istatistikler ON kisiler.id = istatistikler.uyeid INNER JOIN siparisler ON kisiler.id = siparisler.uyeid"); // Alias tanımlayarak anlamlı isimler verilebilir.
		if($Sorgu){
			$KayitSayisi 	= mysqli_num_rows($Sorgu);
			if($KayitSayisi>0){
				while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
				
					echo "Üyenin ID Değeri: " . $Kayitlar["KisiID"] . "<br>"; // Alias tanımlamalarında id sorunu düzelir.
					echo "Üyenin İsim Soyisim Değeri: " . $Kayitlar["KisiAdSoyad"] . "<br>";
					echo "Üyenin Yaş Değeri: " . $Kayitlar["KisiYas"] . "<br>";
					echo "Üyenin Şehir Değeri: " . $Kayitlar["KisiSehir"] . "<br>";
					echo "Üyenin Siteye Giriş Sayısı Değeri: " . $Kayitlar["IstatistikGirisSayisi"] . "<br>";
					echo "Üyenin Sipariş Sayısı Değeri: " . $Kayitlar["IstatistikSiparisSayisi"] . "<br>";
					echo "Üyenin Aldığı Ürün Adı Değeri: " . $Kayitlar["SiparisUrunAdi"] . "<br>";
					echo "Üyenin Aldığı Ürün Fiyatı Değeri: " . $Kayitlar["SiparisUrunFiyati"] . "<br><br>";
				}
			}else{
				echo "Kayıt Bulunamadı.";
			}
		}else{
			echo "Sorgu Hatası";
		}
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>