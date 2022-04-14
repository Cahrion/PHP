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
		UPDATE	 = MySQL sunucusundaki database içerisinde bulunan herhangi	bir tablonun herhangi bir kaydını içerek satırdaki sütuna / sütunlara ait veriyi yada verileri güncellemek için kullanılır.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Guncelle 	= $VeritabaniBaglantisi->query("UPDATE uyeler SET isim='Derya', yas='30', beceriler='SQL', beceriseviyeleri='95'");
		if($Guncelle){ // WHERE komutu kullanılmazsa hepsini değiştirir.
			echo "Kayıtlar Güncellendi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>