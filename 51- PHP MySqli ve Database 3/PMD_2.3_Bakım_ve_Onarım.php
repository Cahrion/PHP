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
	
		CHECK TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun kontrol edilmesini sağlar.
		ANALYZE TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun analiz / çözümlenmesini edilmesini sağlar.
		REPAIR TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun onarılmasını sağlar.
		OPTIMIZE TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun optimize edilmesini sağlar.
		
	*/
	
	// Nesnesel yapi ile
	
	@$VeritabaniBaglantisi = new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Bağlantı hatası <br>";
		echo "Hata içeriği: " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	echo "Bağlantı Sağlandı. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SHOW TABLES");
	
	if($Sorgu){
		while($TabloAdi= $Sorgu->fetch_array()){
			
			$SorguBir 	= $VeritabaniBaglantisi->query("CHECK TABLE " . $TabloAdi[0]);
			$SorguIki 	= $VeritabaniBaglantisi->query("ANALYZE TABLE " . $TabloAdi[0]);
			$SorguUc 	= $VeritabaniBaglantisi->query("REPAIR TABLE " . $TabloAdi[0]);
			$SorguDort 	= $VeritabaniBaglantisi->query("OPTIMIZE TABLE " . $TabloAdi[0]);

			if(($SorguBir == true) and ($SorguIki == true) and ($SorguUc == true) and ($SorguDort == true)){
				echo $TabloAdi[0] . " isimli tablonun bakımı yapıldı. <br>";
			}else{
				echo "Sorgu Hatası";
			}
		}
	}else{
		echo "Sorgu Hatası";
	}
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>