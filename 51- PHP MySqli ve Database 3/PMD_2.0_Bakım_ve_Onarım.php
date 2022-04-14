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
	
		CHECK TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun kontrol edilmesini sağlar.
		ANALYZE TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun analiz / çözümlenmesini edilmesini sağlar.
		REPAIR TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun onarılmasını sağlar.
		OPTIMIZE TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun optimize edilmesini sağlar.
		
	*/
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		echo "Bağlantı hatası <br>";
		echo "Hata içeriği: " . mysqli_connect_error();
		die();
	}
	echo "Bağlantı Sağlandı. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$SorguBir 	= mysqli_query($VeritabaniBaglantisi, "CHECK TABLE uyeler");
	$SorguIki 	= mysqli_query($VeritabaniBaglantisi, "ANALYZE TABLE uyeler");
	$SorguUc 	= mysqli_query($VeritabaniBaglantisi, "REPAIR TABLE uyeler");
	$SorguDort 	= mysqli_query($VeritabaniBaglantisi, "OPTIMIZE TABLE uyeler");
	
	if(($SorguBir == true) and ($SorguIki == true) and ($SorguUc == true) and ($SorguDort == true)){
		echo "Tablo Bakımı yapıldı.";
	}else{
		echo "Sorgu Hatası";
	}
	
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>