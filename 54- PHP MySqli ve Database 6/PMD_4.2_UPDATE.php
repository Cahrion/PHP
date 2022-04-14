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
		UPDATE 	= MySQL suncusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırdaki sütuna / sütunlara ait veriyi / verileri güncelemek için kullanılır.
	*/
	
	// Nesnesel yapıylada yapılabilir biz bir tanesini yapalım.
	
	@$VeritabaniBaglantisi = new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_errno);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Guncelle 	= $VeritabaniBaglantisi->query("UPDATE kisiler SET
	adisoyadi='Umut Can Cesur',
	emailadresi='UmutCanCesur@gmail.com',
	sifre='48195263'
	WHERE id='2'"); // Koşula bağlı gelen kullanıcıyı değiştirir.
		if($Guncelle){
			echo "Kayıtlar Güncellendi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>