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
		COUNT 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütunun toplam kayıt sayısını bulmak için kullanılır.
		MIN 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en küçük değerini bulmak için kullanılır.
		MAX		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en büyük değerini bulmak için kullanılır.
		SUM		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin toplamını bulmak için kullanılır.
		AVG		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin ortalamasını bulmak için kullanılır.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT SUM(siteyegirissayisi) AS SiteyeToplamGiris FROM kayitlar"); 
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->rowCount();
			if($KayitSayisi > 0){
				$Kayit 		= $Sorgu->fetch();
				echo "Siteye Toplam Giris Sayisi: " . $Kayit["SiteyeToplamGiris"];
				
			}else{
				echo "Kayıt Bulunamadı";
			}
		}else{
			echo "Sorgu Hatası";
		}
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>