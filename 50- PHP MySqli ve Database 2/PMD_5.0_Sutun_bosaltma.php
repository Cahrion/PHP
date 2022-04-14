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
	
		TRUNCATE TABLE 	=  MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm içeriklerini boşaltmak / sıfırlamak için kullanılır.
		// (id) değerleri de otomatik sıfırlanır. 
	*/
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		echo "Baglanti hatası <br>";
		echo "Hata içeriği: " . mysqli_connect_error();
		die();
	}
	echo "Bağlanti sağlandı. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "TRUNCATE TABLE uyeler");
	
	if($Sorgu){
		echo "Veritabanı tablosu sıfırlandı.";
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>