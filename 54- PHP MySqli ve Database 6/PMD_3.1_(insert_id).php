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
		
		mysqli_insert_id() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt eklendiğinde eklenen son kaydın ID değerini / verisini bulmak için kullanılır.
		insert_id 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile yeni bir kayıt eklendiğinde eklenen son kaydın ID değerini / verisini bulmak için kullanılır.
	
	*/
	
	// Nesnesel yapı ile yapalım...
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Ekle 		= $VeritabaniBaglantisi->query("INSERT INTO kisiler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('Hakan Kaya', 'hakan@gmail.com', '1594826', '05482631958', '19', 'Erkek', 'İstanbul')");
		if($Ekle){
			echo "Kayit Başarıyla Yapıldı.<br>";
			$KayitIDsi 	= $VeritabaniBaglantisi->insert_id; 
			echo "Eklenen Kaydın IDsi: " . $KayitIDsi; 
		}else{
			echo "Ekleme Hatası";
		}
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>