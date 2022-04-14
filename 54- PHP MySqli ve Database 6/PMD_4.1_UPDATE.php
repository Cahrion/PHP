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
		UPDATE 	= MySQL suncusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırdaki sütuna / sütunlara ait veriyi / verileri güncelemek için kullanılır.
	*/
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_errno());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Guncelle 	= mysqli_query($VeritabaniBaglantisi, "UPDATE kisiler SET
	adisoyadi='Beril Aleyna İsikdemir',
	emailadresi='berilaleyna@gmail.com',
	sifre='48195263',
	telefon='05489157623'
	WHERE id='32'"); // Koşula bağlı gelen kullanıcıyı değiştirir.
		if($Guncelle){
			echo "Kayıtlar Güncellendi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>