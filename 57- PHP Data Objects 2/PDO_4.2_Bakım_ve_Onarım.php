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
		$VeritabaniBaglantisi	= new PDO("mysql:host=localhost:3307;charset=utf8", "root", ""); // dbname verisini çıkarttık
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	 // Otomatik hepsini yapan yapı.
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SHOW TABLES FROM cahrion");
	if($Sorgu){
		foreach($Sorgu as $TabloIsimleri){
			$SorguA 	= $VeritabaniBaglantisi->query("CHECK TABLE cahrion.$TabloIsimleri[0]");
			$SorguB 	= $VeritabaniBaglantisi->query("ANALYZE TABLE cahrion.$TabloIsimleri[0]");
			$SorguC 	= $VeritabaniBaglantisi->query("REPAIR TABLE cahrion.$TabloIsimleri[0]");
			$SorguD 	= $VeritabaniBaglantisi->query("OPTIMIZE TABLE cahrion.$TabloIsimleri[0]");
			
			if(($SorguA == true) and ($SorguB == true) and ($SorguC == true) and ($SorguD == true)){
				echo $TabloIsimleri[0] . " İsimli Tablo Bakımı Başarıyla Yapıldı. <br>";
			}else{
				echo "Sorgu Hatası";
			}
		}
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>