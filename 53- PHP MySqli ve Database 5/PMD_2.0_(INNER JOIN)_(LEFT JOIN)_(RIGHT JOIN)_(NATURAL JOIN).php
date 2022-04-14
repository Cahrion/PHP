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
	
		INNER JOIN 		= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerin birbirleriyle ilişkilendirilmesi için kullanılır. 
		LEFT JOIN 		= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun soldaki tabloya göre birbirleriyle ilişkilendirilmesi için kullanılır.
		RIGHT JOIN 		= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun sağdaki tabloya göre birbirleriyle ilişkilendirilmesi için kullanılır.
		NATURAL JOIN 	= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun eşleşen değerlerin birbirleriyle otomatik ilişkilendirilmesi için kullanılır. 
		
		USING 			= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleriyle ilişkilendirilmesi sırasında ortak sütun koşulunu tanımlamak / belirtmek için kullanılır.
		ON				= MySQL sunucusundaki database içerisinde bulunan herhangi iki veya daha fazla tablonun birbirleriyle ilişkilendirilmesi sırasında sütun koşulunu tanımlamak / belirtmek için kullanılır.
	*/
	
	// INNER JOIN vb parametreleri kullanmadan iki veriyi alma işlemi
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$SorguBir 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler");
		if($SorguBir){
			$KayitSayisi 	= mysqli_num_rows($SorguBir);
			if($KayitSayisi>0){
				while($Kayitlar=mysqli_fetch_assoc($SorguBir)){
					$GelenId 			= $Kayitlar["id"];
					$GelenAdiSoyadi 	= $Kayitlar["adisoyadi"];
					$GelenYas 			= $Kayitlar["yas"];
					$GelenSehir 		= $Kayitlar["sehir"];
					
					$SorguIki 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM istatistikler WHERE uyeid=" . $GelenId . " LIMIT 1");
						if($SorguIki){
							$KayitSayisiIki 	= mysqli_num_rows($SorguIki);
								if($KayitSayisiIki){
									$Kayit 		= mysqli_fetch_assoc($SorguIki);
									$GelenSiteGirisSayisi 	= $Kayit["siteyegirissayisi"];
									$GelenSiparisSayisi 	= $Kayit["siparissayisi"];
								}else{
									$GelenSiteGirisSayisi 	= "";
									$GelenSiparisSayisi 	= "";
								}
						}
					echo "Üyenin ID Değeri: " . $GelenId . "<br>";
					echo "Üyenin İsim Soyisim Değeri: " . $GelenAdiSoyadi . "<br>";
					echo "Üyenin Yaş Değeri: " . $GelenYas . "<br>";
					echo "Üyenin Şehir Değeri: " . $GelenSehir . "<br>";
					echo "Üyenin Siteye Giriş Sayısı Değeri: " . $GelenSiteGirisSayisi . "<br>";
					echo "Üyenin Sipariş Sayısı Değeri: " . $GelenSiparisSayisi . "<br><br>";
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