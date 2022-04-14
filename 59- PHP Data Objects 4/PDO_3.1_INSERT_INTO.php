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
		DISTINCT 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisini de / verilerini de eklemek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Ekle 		= $VeritabaniBaglantisi->query("INSERT INTO uyeler (isim, yas, beceriler, beceriseviyeleri) values ('Kader', '19', 'Photoshop,Python', '30,20')");
	if(!$Ekle){
		echo "Sorgu Hatası <br><br>";
	}
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
	if($Sorgu){
		$KayitSayisi 	= $Sorgu->rowCount();
		if($KayitSayisi > 0){
			foreach($Sorgu as $Kayitlar){
				echo "ID: " . $Kayitlar["id"] . " | ";
				echo $Kayitlar["isim"] . " | ";
				echo $Kayitlar["yas"] . " | ";
				echo $Kayitlar["beceriler"] . " | ";
				echo $Kayitlar["beceriseviyeleri"] . " <br> ";
			}
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