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
		prepare() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre query (sorgu) hazırlamak için kullanılır.
		bind_param() 	= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) derlemek için kullanılır.
			i			= integer
			d			= double
			s			= string
			b			= blob
		
		execute() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) çalıştırmak için kullanılır.
		bind_result() 	= MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için  prepare() metodu kullanılarak hazırlanmış ve execute programı kullanılarak çalıştırılmış olan query'in (sorgunun) sonuçlarını almak için kullanılır.
		fetch() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için  prepare() metodu kullanılarak hazırlanmış, execute programı kullanılarak çalıştırılmış ve bind_result() metodu kullanılarak sonuçları alınmış  olan query'in (sorgunun) verilerini okumak için kullanılır.
		
	*/
	
	// Sadece nesne tabanıyla çalışır.
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$AdSoyad 	= "Pelin Çoban";
	$Email 		= "pelincoban@extraegitim.com";
	$Sifre 		= "124358978465";
	$Telefon 	= "05932641595";
	$Yas	 	= "19";
	$Cinsiyet	= "Kadın";
	$Sehir	 	= "Giresun";
	
	
	$Ekle 	= $VeritabaniBaglantisi->prepare("INSERT INTO kisiler 
	(adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values 
	(?,?,?,?,?,?,?)
	");  
	
	if($Ekle){
		$Ekle->bind_param("ssssiss", $AdSoyad, $Email, $Sifre, $Telefon, $Yas, $Cinsiyet, $Sehir); // İstenirse korumalı şekilde yapılabilir.
		// İlk parametre belirtilecek olan değerlerdir üstte anlatılan gibi (integer = i, string = s ) gibi her bir değişkene bir karakter girilir.
		$Ekle->execute();
		if($Ekle){
			echo "Kayıt Eklendi.";
		}else{
			echo "Sorgu Hatası";
		}
		
	}else{
		echo "Sorgu Hatası";
	}
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>