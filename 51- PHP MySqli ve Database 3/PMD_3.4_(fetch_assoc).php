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
	
	// Nesnesel yapı alanında kullanılmak için fetch_assoc() kullanılır -> (Diğer yapılar da aynı şekilde çalışır.)
	
	@$VeritabaniBaglantisi = new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı Hatası. <br>";
		echo "Hata içeriği: " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT isim AS kullaniciadi, beceriler AS Yetenekleri FROM uyeler"); // Takma isim de eklenebilir.
		if($Sorgu){
			while($Kayit 	= $Sorgu->fetch_assoc()){
				echo "Kayıt isim değeri: " . $Kayit["kullaniciadi"] . "<br>";
				echo "Kayıt beceriler değeri: " . $Kayit["Yetenekleri"] . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası.";
		}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>