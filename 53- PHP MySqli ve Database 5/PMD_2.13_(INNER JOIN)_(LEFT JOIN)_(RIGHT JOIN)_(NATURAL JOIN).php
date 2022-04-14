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

	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler NATURAL JOIN istatistikler");  
		if($Sorgu){
			$KayitSayisi 	= mysqli_num_rows($Sorgu);
			if($KayitSayisi>0){
				while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
					
					echo "Üyenin ID Değeri: " . $Kayitlar["id"] . "<br>"; 
					echo "Üyenin İsim Soyisim Değeri: " . $Kayitlar["adisoyadi"] . "<br>";
					echo "Üyenin Yaş Değeri: " . $Kayitlar["yas"] . "<br>";
					echo "Üyenin Şehir Değeri: " . $Kayitlar["sehir"] . "<br>";
					echo "Üyenin Siteye Giriş Sayısı Değeri: " . $Kayitlar["siteyegirissayisi"] . "<br>";
					echo "Üyenin Sipariş Sayısı Değeri: " . $Kayitlar["siparissayisi"] . "<br><br>";
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