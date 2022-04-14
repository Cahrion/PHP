<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>

	<form action="PDO_3.5_sonuc.php" method="post">
		Adınız: <input type="text" name="isim"><br>
		Yaşınız: <input type="number" name="yas"><br>
		Beceriniz: <input type="text" name="beceriler"><br>
		Beceri Seviyeniz: <input type="text" name="beceriseviyeleri"><br>

		<input type="submit" value="Kaydet"><br><br><br><br>
	</form>
	
	<?php
	/*
		DISTINCT 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisini de / verilerini de eklemek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
	if($Sorgu){
		$KayitSayisi 	= $Sorgu->rowCount();
		if($KayitSayisi > 0){
			echo "Kayıt Listesi <br><br>";
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