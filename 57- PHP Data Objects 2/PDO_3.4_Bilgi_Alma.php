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
	
		SHOW TABLES 	= MySQL sunucusundaki database içerisinde bulunan tüm tabloların listesini bulmak için kullanılır.
		SHOW COLUMNS 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm sütunlarının listesini bulmak için kullanılır.
	
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", ""); 
		echo "Bağlantı Başarıyla Kuruldu";
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$SorguBir 	= $VeritabaniBaglantisi->query("SHOW TABLES"); 
	if($SorguBir){
		echo "Database içerisinde bulunan tüm sütunlar: <br>";
		foreach($SorguBir as $Tablolar){
			echo "Tablo Adı : " . $Tablolar[0] . "<br>";
			$SorguIki 	= $VeritabaniBaglantisi->query("SHOW COLUMNS FROM " . $Tablolar[0]); 
				if($SorguIki){
					foreach($SorguIki as $Sutunlar){
						echo "Sütun adı: " . $Sutunlar[0] . "<br>";
					}
				}else{
					echo "Sorgu Hatası";
				}
			echo "<br><br>";
		}
		
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>