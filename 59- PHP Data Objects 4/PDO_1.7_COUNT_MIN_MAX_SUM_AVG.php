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
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT 
	MIN(yas) AS EnKucukYas, MAX(yas) AS EnBuyukYas,AVG(yas) AS OrtalamaYas,
	MIN(siteyegirissayisi) AS EnAzSiteGirisi, MAX(siteyegirissayisi) AS EnCokSiteGirisi, AVG(siteyegirissayisi) AS SiteGirisiOrtalamasi,
	SUM(siparistoplamtutarlari) AS ToplamCiro FROM kayitlar"); 
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->rowCount();
			if($KayitSayisi > 0){
				$Kayit 		= $Sorgu->fetch();
				echo "Sitedeki en küçük yaş: " . $Kayit["EnKucukYas"] . "<br>";
				echo "Sitedeki en büyük yaş: " . $Kayit["EnBuyukYas"] . "<br>";
				echo "Sitedeki ortalama yaş ortalaması: " . $Kayit["OrtalamaYas"] . "<br>";
				echo "Sitedeki en az giriş sayısı: " . $Kayit["EnAzSiteGirisi"] . "<br>";
				echo "Sitedeki en fazla giriş sayısı: " . $Kayit["EnCokSiteGirisi"] . "<br>";
				echo "Sitedeki ortalama giriş sayısı: " . $Kayit["SiteGirisiOrtalamasi"] . "<br>";
				echo "Toplam Kazanç: " . $Kayit["ToplamCiro"];
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