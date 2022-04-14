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
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "");
	if(mysqli_connect_errno()){
		echo "Baglanti hatası <br>";
		echo "Hata içeriği: " . mysqli_connect_error();
		die();
	}
	echo "Bağlanti sağlandı. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SHOW TABLES FROM cahrion"); // veritabanını belirtebiliriz.
	
	if($Sorgu){
		while($TabloAdi= mysqli_fetch_array($Sorgu)){
			echo $TabloAdi[0] . "<br>";
		}
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>