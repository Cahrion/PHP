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
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Ekle 		= mysqli_query($VeritabaniBaglantisi, "INSERT INTO kisiler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('Hakan Kaya', 'hakan@gmail.com', '1594826', '05482631958', '19', 'Erkek', 'İstanbul')");
		if($Ekle){
			echo "Kayit Başarıyla Yapıldı.<br>";
			$KayitIDsi 	= mysqli_insert_id($VeritabaniBaglantisi); 
			echo "Eklenen Kaydın IDsi: " . $KayitIDsi; 
		}else{
			echo "Ekleme Hatası";
		}
	
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>