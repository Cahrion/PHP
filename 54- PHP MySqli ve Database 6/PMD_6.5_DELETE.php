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
		DELETE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırı veya satırları silmek için kullanılır.
	*/
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM kisiler"); 
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->num_rows;
			if($KayitSayisi>0){
				while($Kayitlar = $Sorgu->fetch_assoc()){
					echo "Kayıt " . $Kayitlar["id"] . "- ";
					echo $Kayitlar["adisoyadi"] . " | ";
					echo $Kayitlar["emailadresi"] . " | ";
					echo $Kayitlar["sifre"] . " | ";
					echo $Kayitlar["telefon"] . " | ";
					echo $Kayitlar["yas"] . " | ";
					echo $Kayitlar["cinsiyet"] . " | ";
					echo $Kayitlar["sehir"] . " | ";
					echo $Kayitlar["kayittarihi"] . " | ";
					echo " <a href='PMD_6.6_sonuc.php?id=" . $Kayitlar['id'] . "'>Sil</a><br>";
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