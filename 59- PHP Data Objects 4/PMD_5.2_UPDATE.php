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
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
		if($Sorgu){ 
			$KayitSayisi 	= $Sorgu->rowCount();
			if($KayitSayisi>0){
				foreach($Sorgu as $Kayitlar){
					echo "ID: " . $Kayitlar["id"] . " | ";
					echo $Kayitlar["isim"] . " | ";
					echo $Kayitlar["yas"] . " | ";
					echo $Kayitlar["beceriler"] . " | ";
					echo $Kayitlar["beceriseviyeleri"] . " | ";
					echo "<a href='http://127.0.0.1/PHPdersleri/guncelle.php?id=" . $Kayitlar["id"] . "'>Guncelle</a>" . " <br> ";
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