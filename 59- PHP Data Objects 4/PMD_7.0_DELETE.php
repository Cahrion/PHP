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
	
	$Sorgu 		= $VeritabaniBaglantisi->query("DELETE FROM kayitlar"); // Bütün kayıtlar gider.
		if($Sorgu){
			echo "Kayıtlar Silindi";
		}else{
			echo "Sorgu Hatası";
		}
			
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>