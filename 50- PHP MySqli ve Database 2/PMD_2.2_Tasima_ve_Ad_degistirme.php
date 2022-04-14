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
	
			RENAME 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun adını değiştirmek / güncellemek için kullanılır. Ayrıca istenirse herhangi bir tabloyu içerisinde bulunduğu database'den başka bir database'e taşımak için kullanılır.
		
	*/
	
	// Nesnesel yapi ile
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası";
		echo "Hata Açıklaması: " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	echo "Veritabanı çalıştı <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("RENAME TABLE uyeler TO kayitlar"); // uyeler adındaki tabloyu kayitlar yaptı.
	
	if($Sorgu){
		echo "Tablo adı güncellendi.";
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>