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
	
		mysqli_fetch_assoc() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini ilişkisel bir dizi halinde okumak için kullanılır.
		fetch_assoc() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini ilişkisel bir dizi halinde okumak için kullanılır.
		
	*/
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		echo "Bağlantı Hatası. <br>";
		echo "Hata içeriği: " . mysqli_connect_error();
		die();
	}
	mysqli_set_charset($VeritabaniBaglantisi,"UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
		if($Sorgu){
			
			$Kayit 	= mysqli_fetch_assoc($Sorgu);  // İlk kaydı alır.
			echo "<pre>";
			print_r($Kayit);
			echo "<pre>";
			echo "Kayıt ID değeri: " . $Kayit["id"] . "<br>";
			echo "Kayıt isim değeri: " . $Kayit["isim"] . "<br>";
			echo "Kayıt Yaş değeri: " . $Kayit["yas"] . "<br>";
			echo "Kayıt beceriler değeri: " . $Kayit["beceriler"] . "<br>";
			echo "Kayıt Beceri Seviyeleri değeri: " . $Kayit["beceriseviyeleri"] . "<br>";
			
		}else{
			echo "Sorgu Hatası.";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>