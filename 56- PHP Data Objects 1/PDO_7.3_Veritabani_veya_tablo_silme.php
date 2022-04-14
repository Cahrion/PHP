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
	
		DROP DATABASE 	= MySQL sunucusu içerisinde bulunan herhangi bir database'i silmek için kullanılır.
		DROP TABLE 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloyu silmek için kullanılır.
		
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=timetube;charset=UTF8", "root", ""); // dbname yapısı eklendi.
		echo "Veritabanı bağlantısı başarıyla kuruldu.<br>";
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	// exec() yapısıyla da yapılabilir.
	
	$Sorgu 	= $VeritabaniBaglantisi->exec("DROP TABLE ornek");
		if($Sorgu !== false){
			echo "Tablo Silindi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi = null;
	?>
</body>
</html>