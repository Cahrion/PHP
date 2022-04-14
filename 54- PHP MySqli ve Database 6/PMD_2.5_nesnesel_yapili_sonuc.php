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
		
		INSERT INTO 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisininde / verilerini de eklemek için kullanılır.
		
	*/
	
	// Nesnesel yapı ile yapalim
	
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
	
	
	
	$Ekle 		= $VeritabaniBaglantisi->query("INSERT INTO kisiler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('$Gelenadisoyadi', '$Gelenemailadresi', '$Gelensifre', '$Gelentelefon', '$Gelenyas', '$Gelencinsiyet', '$Gelensehir')");
		if($Ekle){
			echo "Kayıt Başarıyla Eklendi. <br><br>";
			header("Location: PMD_2.4_INSERT INTO_ile_yeni_kayıt_ekleme.php");
			exit();
		}else{
			echo "Ekleme Hatası <br><br>";
		}

	$VeritabaniBaglantisi->close();
	?>
</body>
</html>