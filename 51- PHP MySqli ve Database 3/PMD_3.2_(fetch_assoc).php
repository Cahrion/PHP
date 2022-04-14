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
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT isim, beceriler FROM uyeler"); // Az veri kullanılsın diye istenilenleri getirir.
		if($Sorgu){
			while($Kayit 	= mysqli_fetch_assoc($Sorgu)){
				echo "Kayıt isim değeri: " . $Kayit["isim"] . "<br>";
				echo "Kayıt beceriler değeri: " . $Kayit["beceriler"] . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası.";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>