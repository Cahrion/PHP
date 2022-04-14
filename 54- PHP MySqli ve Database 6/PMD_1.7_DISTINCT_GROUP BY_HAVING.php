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
		DISTINCT	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin sadece ilkini işleme dahil ederek diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.
		GROUP BY	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin gruplandırılmasını sağlamak için kullanılır.
		HAVING		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin GROUP BY ifadesi ile gruplandırılması sırasında koşul / koşullar tanımlamak / belirtmek için kullanılır.
		
	*/
	
	// Nesnesel yapıyla yapılabilir (Hepsi yapılabilir ama biz sadece bir tanesini yapalım.)
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT sehir, 
	MIN(siparistoplamtutarlari) AS MinimumTutar,
	MAX(siparistoplamtutarlari) AS MaksimumTutar,
	SUM(siparistoplamtutarlari) AS ToplamTutar 
	FROM kayitlar GROUP BY sehir HAVING ToplamTutar>0"); // HAVING yapısı WHERE yapısı gibi kullanılır ama sadece GROUP BY yapısında çalışır.
	if($Sorgu){
		$KayitSayisi 	= $Sorgu->num_rows;
		if($KayitSayisi>0){
			echo "Üyelere Ait Şehirler" . "<br><br>";
			while($Kayitlar=$Sorgu->fetch_assoc()){ // Genellikle bu parametreler istatistik tutmamıza yarar.
				echo "Şehir: " . $Kayitlar["sehir"] . "<br>";
				echo "Minumum Tutar: " . $Kayitlar["MinimumTutar"] . "<br>";
				echo "Maksimum Tutar: " . $Kayitlar["MaksimumTutar"] . "<br>";
				echo "Toplam Tutar: " . $Kayitlar["ToplamTutar"] . "<br><br>";
			}
		}else{
			echo "Kayıt Bulunamadı";
		}
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>