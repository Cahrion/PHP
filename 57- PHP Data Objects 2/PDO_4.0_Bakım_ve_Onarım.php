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
	
		CHECK 		= MySQL suucusundaki database içerisinde bulunan herhangi bir tablonun kontrol edilmesi için kullanılır.
		ANALYZE	 	= MySQL suucusundaki database içerisinde bulunan herhangi bir tablonun çözümlenmesi ve analiz edilmesi için kullanılır.
		REPAIR 		= MySQL suucusundaki database içerisinde bulunan herhangi bir tablonun onarılması çin kullanılır.
		OPTIMIZE 	= MySQL suucusundaki database içerisinde bulunan herhangi bir tablonun optimize edilmesi için kullanılır.
	
		// exec() yapısıyla çalışmaz...
	*/
	try{
		$VeritabaniBaglantisi	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	
	$SorguA 	= $VeritabaniBaglantisi->query("CHECK TABLE kisiler");
	$SorguB 	= $VeritabaniBaglantisi->query("ANALYZE TABLE kisiler");
	$SorguC 	= $VeritabaniBaglantisi->query("REPAIR TABLE kisiler");
	$SorguD 	= $VeritabaniBaglantisi->query("OPTIMIZE TABLE kisiler");
	
	if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true)){
		echo "Tablo Bakımı Başarıyla Yapıldı.";
	}else{
		echo "Sorgu Hatası";
	}
	
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>