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
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler"); 
		if($Sorgu){
			$KayitSayisi 	= mysqli_num_rows($Sorgu);
			if($KayitSayisi > 0){
				while($Kayitlar = mysqli_fetch_assoc($Sorgu)){
					echo "Kayıt " . $Kayitlar["id"] . "- ";
					echo $Kayitlar["adisoyadi"] . " | ";
					echo $Kayitlar["emailadresi"] . " | ";
					echo $Kayitlar["sifre"] . " | ";
					echo $Kayitlar["telefon"] . " | ";
					echo $Kayitlar["yas"] . " | ";
					echo $Kayitlar["cinsiyet"] . " | ";
					echo $Kayitlar["sehir"] . " | ";
					echo $Kayitlar["kayittarihi"] . " | ";
					echo "<a href='PMD_4.4_guncelle.php?id=" . $Kayitlar['id'] . "'>Güncelle</a><br><br>";
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