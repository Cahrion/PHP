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
		rowCount() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun toplam kayıt sayısını bulmak veya işlem yapıldığında etkilenen kayıt sayısını ublmak için kullanılır.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8","root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Sorgu  	= $VeritabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_NUM);
	if($Sorgu){
		$KayitSayisi 	= $Sorgu->rowCount();
		if($KayitSayisi > 0){
			foreach($Sorgu as $Kayitlar){
				echo "ID: " . $Kayitlar[0] . " | ";
				echo $Kayitlar[1] . " | ";
				echo $Kayitlar[2] . " | ";
				echo $Kayitlar[3] . " | ";
				echo $Kayitlar[4] . " | ";
				echo $Kayitlar[5] . " | ";
				echo $Kayitlar[6] . " | ";
				echo $Kayitlar[7] . " | ";
				echo $Kayitlar[8] . " <br> ";
				
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