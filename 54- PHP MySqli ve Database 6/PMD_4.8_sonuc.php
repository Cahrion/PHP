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
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);	
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Gelenadisoyadi 	= $_POST["adisoyadi"];
	$Gelenemailadresi 	= $_POST["emailadresi"];
	$Gelensifre 		= $_POST["sifre"];
	$Gelentelefon 		= $_POST["telefon"];
	$Gelenyas 			= $_POST["yas"];
	$Gelencinsiyet 		= $_POST["cinsiyet"];
	$Gelensehir 		= $_POST["sehir"];
	
	$Ekle 		= $VeritabaniBaglantisi->query("UPDATE kisiler SET
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
			$VeritabaniBaglantisi->close();
			header("Location: PMD_4.6_UPDATE.php");
			exit();
		}else{
			echo "Ekleme Hatası <br><br>";
		}

	$VeritabaniBaglantisi->close();
	?>
</body>
</html>