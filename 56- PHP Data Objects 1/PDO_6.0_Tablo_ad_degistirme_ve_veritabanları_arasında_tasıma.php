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
		RENAME 	= MySQL sunucusndaki database içerisinde bulunan herhangi bir tablonun adını değiştirmek / güncellemek için kullanılır. Ayrıca istenirse herhangi bir tabloyu içerisinde bulunduğu database'den başka bir database'e taşımak içinde kullanılabilir.
	*/
	try{
		$VeritabaniBaglantisi = new PDO("mysql:host=localhost:3307;dbname=timetube;charset=UTF8", "root", "");
		echo "Veritabanı Bağlantısı Başarıyla Kuruldu. <br>";
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Sorgu 	= $VeritabaniBaglantisi->query("RENAME TABLE ornek TO yeni");
		if($Sorgu){
			echo "Tablo Adı Değiştirildi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi = null;
	?>
</body>
</html>