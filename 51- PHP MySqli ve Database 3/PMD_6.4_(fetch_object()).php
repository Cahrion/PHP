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
	
	// Nesnesel yapı ile (Hepsinde yapılabilir biz bir örnek verelim)
	
	@$VeritabaniBaglantisi 		= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Baglanti Hatasi");
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT isim AS adi, beceriler AS yetenekleri FROM uyeler"); // Alias tanımlamalarıda geçerlidir.
		if($Sorgu){
			
			while($Kayit 	= $Sorgu->fetch_object()){
				echo "Kayıt İsim Değeri: " . $Kayit->adi . "<br>";
				echo "Kayıt Becerileri Değeri: " . $Kayit->yetenekleri . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>