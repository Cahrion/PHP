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
	
	$VeritabaniBaglantisi 	= @mysqli_connect("localhost:3307", "root", "");
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası <br>";
		echo "Hata içeriği: " . mysqli_connect_error();
		die();
	}
	echo "Veritabanına bağlandı. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "DROP DATABASE cahrion"); // "cahrion" adlı veritabanı silinecek.
	
	if($Sorgu){
		echo "Veritabanı Silindi.";
	}else{
		echo "Sorgu Hatası";
	}
	
	
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>