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
	
	$GelenID 	= $_GET["id"];
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM uyeler WHERE id=" . "$GelenID");
		if($Sorgu){
			$KayitSayisi = $Sorgu->rowCount();
			if($Sorgu){
				$Kayitlar 	= $Sorgu->fetch();
			}else{
				echo "Kayıt Bulunamadı.";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi 		= null;  // ""
	?>
	<form action="http://127.0.0.1/PHPdersleri/sonuc.php?id= <?php echo $GelenID ?>" method="post">
		Adınız = <input type="text" name="isim" value=<?php echo $Kayitlar["isim"] ?>><br>
		Yaşınız = <input type="number" name="yas"  value=<?php echo $Kayitlar["yas"] ?>><br>
		Beceriler = <input type="text" name="beceriler"  value=<?php echo $Kayitlar["beceriler"] ?>><br>
		Beceri Seviyeniz = <input type="text" name="beceriseviyesi"  value=<?php echo $Kayitlar["beceriseviyeleri"] ?>><br>
		<input type="submit" value="Kaydet">
	</form>
	
</body>
</html>