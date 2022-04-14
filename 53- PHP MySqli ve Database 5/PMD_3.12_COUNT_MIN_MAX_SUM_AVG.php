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
	COUNT 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun toplam kayıt sayısını bulmak için kullanılır.
	MIN 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en küçük kayıt değerini bulmak için kullanılır.
	MAX 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun en büyük kayıt değerini bulmak için kullanılır.
	SUM 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin toplamını bulmak için kullanılır.
	AVG 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun belirtilecek olan sütununun tüm kayıt değerlerinin ortalamasını bulmak için kullanılır.
	*/

	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT COUNT(id) AS ToplamSatir, MIN(siteyegirissayisi) AS MinumumSiteyeGirisSayisi, MAX(siteyegirissayisi) AS MaximumSiteyeGirisSayisi, AVG(yas) AS YasOrtalamasi, SUM(siparistoplamtutarlari) AS ToplamSiparisTutari FROM kayitlar");
		if($Sorgu){
			$KayitSayisi = mysqli_num_rows($Sorgu);
			if($KayitSayisi){
				$Kayitlar 	= mysqli_fetch_assoc($Sorgu);
				echo "Toplam Kayıt Sayısı: " . $Kayitlar["ToplamSatir"] . "<br>";
				echo "Minimum Siteye Giris Sayisi: " . $Kayitlar["MinumumSiteyeGirisSayisi"] . "<br>";
				echo "Maxsimum Siteye Giris Sayisi: " . $Kayitlar["MaximumSiteyeGirisSayisi"] . "<br>";
				echo "Yas Ortalaması Değeri: " . $Kayitlar["YasOrtalamasi"] . "<br>";
				echo "Siparis toplam Tutari: " . $Kayitlar["ToplamSiparisTutari"];
			}else{
				echo "Kayıt bulunamadı.";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>