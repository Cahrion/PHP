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
	
	// Nesnesel yapıyıla yapalım;
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);	
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
		
	$Ekle 		= $VeritabaniBaglantisi->query("INSERT INTO kisiler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('Tarık Boga', 'tarik@extraegitim.com', 'BBBBBBBB', '054859126348', '23', 'Erkek', 'Kırklareli')");
		if($Ekle){
			echo "Kayıt Başarıyla Eklendi. <br><br>";
		}else{
			echo "Ekleme Hatası <br><br>";
		}
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT * FROM kisiler");
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->num_rows;
			if($KayitSayisi > 0){
				while($Kayitlar = $Sorgu->fetch_object()){
					echo "ID değeri: " . $Kayitlar->id . "<br>";
					echo "Isim Soyisim değeri: " . $Kayitlar->adisoyadi . "<br>";
					echo "Email Adresi değeri: " . $Kayitlar->emailadresi . "<br>";
					echo "Şifresi değeri: " . $Kayitlar->sifre . "<br>";
					echo "Telefon Numarası değeri: " . $Kayitlar->telefon . "<br>";
					echo "Yaş değeri: " . $Kayitlar->yas . "<br>";
					echo "Cinsiyet değeri: " . $Kayitlar->cinsiyet . "<br>";
					echo "Sehir değeri: " . $Kayitlar->sehir . "<br>";
					echo "Kayıt Tarihi değeri: " . $Kayitlar->kayittarihi . "<br><br>";
				}
			}else{
				echo "Kayıt Bulunamadı.";
			}
		}else{
			echo "Sorgu Hatası";
		}
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>