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
	
		DROP DATABASE 	= MySQL sunucusu içerisindeki herhangi bir database'yi silmek için kullanılır.
		DROP TABLE 		= MySQL sunucusu içerisindeki database içerisinde herhangi bir tabloyu silmek için kullanılır.
		
	*/
	
	// Nesne yapısıyla 
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası <br>";
		echo "Hata içeriği: " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	echo "Veritabanına bağlandı. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("DROP DATABASE cahrion"); // "cahrion" adlı veritabanı silinecek.
	
	if($Sorgu){
		echo "Veritabanı Silindi.";
	}else{
		echo "Sorgu Hatası";
	}
	
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>