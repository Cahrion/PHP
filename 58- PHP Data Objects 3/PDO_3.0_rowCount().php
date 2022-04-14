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
		
		echo "kisiler tablosu içerisinde bulunan kayıt sayısı: " . $KayitSayisi;
		
	}else{
		echo "Sorgu Hatası";
	}
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>