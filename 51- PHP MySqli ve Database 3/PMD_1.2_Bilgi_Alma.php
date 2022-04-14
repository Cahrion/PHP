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
	
		SHOW TABLES 	= MySQL sunucusundaki database içerisinde buluna tüm tabloların listesini bulmak için kullanılır.
		SHOW COLUMNS 	= MySQL sunucusundaki database içerisinde buluna herhangi bir tablonun tüm sütunlarının listesini bulmak için kullanılır.
		
	*/
	
	// Nesnesel yapı ile de yapılabilir (Her ikisi de)
	
	@$VeritabaniBaglantisi = new mysqli("localhost:3307", "root", "");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Baglanti hatası <br>";
		echo "Hata içeriği: " . $VeritabaniBaglantisi->connect_error();
		die();
	}
	echo "Bağlanti sağlandı. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SHOW TABLES FROM cahrion"); // veritabanını belirtebiliriz.
	
	if($Sorgu){
		while($TabloAdi= $Sorgu->fetch_array($Sorgu)){
			echo $TabloAdi[0] . "<br>";
		}
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>