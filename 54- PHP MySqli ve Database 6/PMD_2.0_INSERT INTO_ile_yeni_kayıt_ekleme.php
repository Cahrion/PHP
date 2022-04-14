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
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());	
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
		
	$Ekle 		= mysqli_query($VeritabaniBaglantisi, "INSERT INTO kisiler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('Tarık Boga', 'tarik@extraegitim.com', 'BBBBBBBB', '054859126348', '23', 'Erkek', 'Kırklareli')");
		if($Ekle){
			echo "Kayıt Başarıyla Eklendi. <br><br>";
		}else{
			echo "Ekleme Hatası <br><br>";
		}
	
	$Sorgu 		= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler");
		if($Sorgu){
			$KayitSayisi 	= mysqli_num_rows($Sorgu);
			if($KayitSayisi > 0){
				while($Kayitlar = mysqli_fetch_object($Sorgu)){
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
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>