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
		REPLACE	 = MySQL sunucusundaki database içerisinde bulunan herhangi	bir tablonun herhangi bir kaydını içeren satırındaki / satırlarındaki sütuna ait veriyi tam veya kısmı olarak değiştirmek için kullanılır.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	// exec() Yapısı ile düzeltelim ve kullanılabilir olduğunu görelim
	
	$Degistir 	= $VeritabaniBaglantisi->exec("UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, '\n', '<br>')"); 
		if($Degistir !== false){
			echo "Değerler Başarıyla Değiştirildi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>