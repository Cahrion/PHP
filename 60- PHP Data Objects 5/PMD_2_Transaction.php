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
		beginTransaction() 	= MySQL suncuusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda otomatik işleyen geçiçi işlem yapılarını açmak veya kapatmak için kullanılır.
		commit() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda daha önceden beginTransaction() metodu kullanılarak açılmış olan otomatik işleyen geçiçi işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçiçilikten çıkarak kalıcı hale döndürmek için kullanılır.
		rollBack() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda daha önceden beginTransaction() metodu kullanılarak açılmış olan otomatik işleyen geçiçi işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçiçilikten çıkartılarak işlemin geriye alınması / iptal edilmesi için kullanılır.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	
	
	$VeritabaniBaglantisi->beginTransaction(); // Bir sıkıntı olur mu diye belirtilen değerler gelirse 
	
	$GuncelleBir 	= $VeritabaniBaglantisi->prepare("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi-1000 WHERE id=1");
	$GuncelleIki 	= $VeritabaniBaglantisi->prepare("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi+1000 WHERE id=3");
	$GuncelleBir->execute();
	$GuncelleIki->execute();
	$GuncelleBirKayitSayisi 	=  $GuncelleBir->rowCount();
	$GuncelleIkiKayitSayisi 	=  $GuncelleIki->rowCount();
	
		if(($GuncelleBirKayitSayisi > 0) and ($GuncelleIkiKayitSayisi > 0)){
			$VeritabaniBaglantisi->commit(); // Depodaki verileri çalıştırır.
			echo "Işlemler Başarıyla Gerçekleştirildi.<br><br>";
		}else{
			$VeritabaniBaglantisi-rollBack(); // İşlem başarısız döner ve geri alınır.
			echo "Sorgu Hatası";
		}
	
	$Sorgu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM hesaplar");
	$Sorgu->execute();
		if($Sorgu){
			$KayitSayisi = $Sorgu->rowCount();
			if($KayitSayisi > 0){
				foreach($Sorgu as $Kayitlar){
					echo "ID: " . $Kayitlar['id'] . " | ";
					echo $Kayitlar['adisoyadi'] . " | ";
					echo $Kayitlar['hesapbakiyesi'] . " <br> ";
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