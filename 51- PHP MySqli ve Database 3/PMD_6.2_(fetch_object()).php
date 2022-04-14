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
	
		mysqli_fetch_object() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini nesne halinde okumak için kullanılır.
		fetch_object() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini nesne halinde okumak için kullanılır.

	*/
	
	@$VeritabaniBaglantisi 		= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Baglanti Hatasi");
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 		= mysqli_query($VeritabaniBaglantisi, "SELECT id,isim,yas FROM uyeler"); // İstenen kadar veri alınması sistemi yormaz.
		if($Sorgu){
			
			while($Kayit 	= mysqli_fetch_object($Sorgu)){
				echo "Kayıt ID Değeri: " . $Kayit->id . "<br>";
				echo "Kayıt İsim Değeri: " . $Kayit->isim . "<br>";
				echo "Kayıt Yas Değeri: " . $Kayit->yas . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>