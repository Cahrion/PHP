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
		lastInsertId() 	= MySQL suncuusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt eklendiğinde eklenen son kaydın ID değerini / verisini bulmak için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Sorgu 		= $VeritabaniBaglantisi->query("INSERT INTO siparisler (uyeid, urunadi, urunfiyati) values (1, 'Defter', 20)");
	if($Sorgu){
		echo "Kayıt Eklendi. <br>";
		echo "Eklenen Kaydın ID Değeri: " . $VeritabaniBaglantisi->lastInsertId() . "<br><br>"; // Son eklenen kaydı verir.
		
	}else{
		echo "Sorgu Hatası";
	}
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT * FROM siparisler");
	if($Sorgu){
		$KayitSayisi 	= $Sorgu->rowCount();
		if($KayitSayisi > 0){
			foreach($Sorgu as $Kayitlar){
				echo "ID: " . $Kayitlar["id"] . " | ";
				echo $Kayitlar["uyeid"] . " | ";
				echo $Kayitlar["urunadi"] . " | ";
				echo $Kayitlar["urunfiyati"] . " <br> ";
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