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
	
	// Nesnesel yapı ile
	
	@$VeritabaniBaglantisi = new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı hatası. <br>";
		echo "Hata içeriği: " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT isim, beceriler FROM uyeler"); // İki adet veri alırsak yeniden 0'dan başlar.
	if($Sorgu){
		while($Kayit 	= $Sorgu->fetch_row()){
			echo "Kayıt isim değeri: " . $Kayit[0] . "<br>";
			echo "Kayıt beceriler değeri: " . $Kayit[1] . "<br><br>";
		}
		
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>