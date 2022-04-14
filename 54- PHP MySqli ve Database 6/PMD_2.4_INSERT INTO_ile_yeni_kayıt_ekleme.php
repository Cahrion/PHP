<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	<form action="PMD_2.5_nesnesel_yapili_sonuc.php" method="post">
		Adınız Soyadınız: <input type="text" name="adisoyadi"> <br>
		E-Mail Adresiniz: <input type="text" name="emailadresi"> <br>
		Şifreniz: <input type="password" name="sifre"> <br>
		Telefon Numaranız: <input type="text" name="telefon"> <br>
		Yaşınız: <select name="yas">
			<option value="">Lütfen Seçiniz</option>
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option value="40">40</option>
			<option value="50">50</option>
			<option value="60">60</option>
		</select><br>
		Cinsiyetiniz: <input type="radio" name="cinsiyet" value="Erkek">Erkek <input type="radio" name="cinsiyet" value="Erkek">Kadın <br>
		Yaşadığınız Şehir: <input type="text" name="sehir">
		<input type="submit" value="Kaydet">
	</form>
	<br><br><br><br><br>
	<?php
	/*
		
		INSERT INTO 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisininde / verilerini de eklemek için kullanılır.
		
	*/
	
	// Nesne yapısıyla yapalım... 
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);	
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT * FROM kisiler");
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->num_rows;
			if($KayitSayisi > 0){
				while($Kayitlar = $Sorgu->fetch_object()){
					echo "Kayıt " . $Kayitlar->id . "- ";
					echo $Kayitlar->adisoyadi . " | ";
					echo $Kayitlar->emailadresi . " | ";
					echo $Kayitlar->sifre . " | ";
					echo $Kayitlar->telefon . " | ";
					echo $Kayitlar->yas . " | ";
					echo $Kayitlar->cinsiyet . " | ";
					echo $Kayitlar->sehir . " | ";
					echo $Kayitlar->kayittarihi . "<br><br>";
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