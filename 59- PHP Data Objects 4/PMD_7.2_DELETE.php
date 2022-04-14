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
		DELETE 	= MySQL suncuusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırı / satrıları silmek için kullanılır.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT * FROM kayitlar", PDO::FETCH_ASSOC);
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->rowCount();
			if($KayitSayisi > 0){
				foreach($Sorgu as $Kayitlar){
					echo "ID: " . $Kayitlar["id"] . " | ";
					echo $Kayitlar["adisoyadi"] . " | ";
					echo $Kayitlar["yas"] . " | ";
					echo $Kayitlar["sehir"] . " | ";
					echo $Kayitlar["siteyegirissayisi"] . " | ";
					echo $Kayitlar["siparissayisi"] . " | ";
					echo $Kayitlar["siparistoplamtutarlari"] . " | ";
					echo "<a href='http://127.0.0.1/PHPdersleri/PMD_7.3_sonuc.php?id=" . $Kayitlar["id"] . "'> SIL </a>" . " <br> ";
				}
			}else{
				echo "Kayıt Bulunamadı.";
			}
		}else{
			echo "Sorgu Hatası";
		}
			
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>