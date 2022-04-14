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
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		echo "Baglanti hatası <br>";
		echo "Hata içeriği: " . mysqli_connect_error();
		die();
	}
	echo "Bağlanti sağlandı. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$SorguBir 	= mysqli_query($VeritabaniBaglantisi, "SHOW TABLES"); 
	
	if($SorguBir){
		$SorguIki 	= mysqli_query($VeritabaniBaglantisi, "SHOW COLUMNS FROM kayitlar"); // İstenilen sütun verilerini getirdi.
		if($SorguIki){
			while($SutunAdi = mysqli_fetch_array($SorguIki)){
				echo "Sütun Adi: " . $SutunAdi[0] . "<br>";
			}
			echo "<br>";
		}else{
			echo "Sorgu Hatası";
		}
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>