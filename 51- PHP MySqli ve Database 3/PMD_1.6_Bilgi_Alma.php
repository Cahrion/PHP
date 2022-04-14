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
	
	// Nesnesel yapı ile (Hepsini de aynı şekilde yapabilirsiniz.)
	
	@$VeritabaniBaglantisi = new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Baglanti hatası <br>";
		echo "Hata içeriği: " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	echo "Bağlanti sağlandı. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$SorguBir 	= $VeritabaniBaglantisi->query("SHOW TABLES"); 
	
	if($SorguBir){
		$SorguIki 	= $VeritabaniBaglantisi->query("SHOW COLUMNS FROM kayitlar"); // İstenilen sütun verilerini getirdi.
		if($SorguIki){
			while($SutunAdi = $SorguIki->fetch_array()){
				echo "Sütun Adi: " . $SutunAdi[0] . "<br>";
			}
			echo "<br>";
		}else{
			echo "Sorgu Hatası";
		}
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>