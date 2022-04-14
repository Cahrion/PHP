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
	
			RENAME 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun adını değiştirmek / güncellemek için kullanılır. Ayrıca istenirse herhangi bir tabloyu içerisinde bulunduğu database'den başka bir database'e taşımak için kullanılır.
		
	*/
	
	$VeritabaniBaglantisi 	= @mysqli_connect("localhost:3307", "root", "", "cahrion");
	
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası";
		echo "Hata Açıklaması: " . mysqli_connect_error();
		die();
	}
	echo "Veritabanı çalıştı <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "RENAME TABLE uyeler TO kayitlar"); // uyeler adındaki tabloyu kayitlar yaptı.
	
	if($Sorgu){
		echo "Tablo adı güncellendi.";
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>