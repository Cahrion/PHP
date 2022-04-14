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
	
		mysqli_fetch_row() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini numaralandırılmış bir dizi halinde okumak için kullanılır.
		fetch_row() 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini numaralandırılmış bir dizi halinde okumak için kullanılır.
		
	*/
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		echo "Bağlantı hatası. <br>";
		echo "Hata içeriği: " . mysqli_connect_error();
		die();
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 		= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
	if($Sorgu){
		while($Kayit 	= mysqli_fetch_row($Sorgu)){
			echo "Kayıt ID değeri: " . $Kayit[0] . "<br>";
			echo "Kayıt isim değeri: " . $Kayit[1] . "<br>";
			echo "Kayıt yas değeri: " . $Kayit[2] . "<br>";
			echo "Kayıt beceriler değeri: " . $Kayit[3] . "<br>";
			echo "Kayıt beceri seviyeleri değeri: " . $Kayit[4] . "<br><br>";
		}
		
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>