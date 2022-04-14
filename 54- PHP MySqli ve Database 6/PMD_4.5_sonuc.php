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
	
	$GelenID 			= $_GET["id"];
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());	
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Gelenadisoyadi 	= $_POST["adisoyadi"];
	$Gelenemailadresi 	= $_POST["emailadresi"];
	$Gelensifre 		= $_POST["sifre"];
	$Gelentelefon 		= $_POST["telefon"];
	$Gelenyas 			= $_POST["yas"];
	$Gelencinsiyet 		= $_POST["cinsiyet"];
	$Gelensehir 		= $_POST["sehir"];
	
	$Ekle 		= mysqli_query($VeritabaniBaglantisi,"UPDATE kisiler SET
	adisoyadi='$Gelenadisoyadi',
	emailadresi='$Gelenemailadresi',
	sifre='$Gelensifre',
	telefon='$Gelentelefon',
	yas='$Gelenyas',
	cinsiyet='$Gelencinsiyet',
	sehir='$Gelensehir'
	WHERE id='$GelenID'");
		if($Ekle){
			echo "Kayıt Başarıyla Güncellendi. <br><br>";
			mysqli_close($VeritabaniBaglantisi);
			header("Location: PMD_4.3_UPDATE.php");
			exit();
		}else{
			echo "Ekleme Hatası <br><br>";
		}

	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>