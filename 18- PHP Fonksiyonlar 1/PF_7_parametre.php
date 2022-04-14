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
		function IslemYap($Isim, $Soyisim, $DogumTarihi, $Yas, $Sehir, $Meslek, $Cinsiyet){
			$KisiKarti 	= "Adı: " . $Isim . "<br>" . "Soyad: " . $Soyisim . "<br>" . "DogumTarihi: " . $DogumTarihi . "<br>" . "Yas: " . $Yas . "<br>" . "Sehir: " . $Sehir . "<br>" . "Meslek: " . $Meslek . "<br>" . "Cinsiyet: " . $Cinsiyet;
				
			return $KisiKarti;
		}
		$Kart 	=	IslemYap("Icabi", "Kırgız", "28.03.2002", "19", "İstanbul", "Yazılım", "Erkek");
			echo $Kart;
			echo "<br><br>";
		$Kart 	=	IslemYap("Aslı", "Kaya", "07.11.2001", "19", "İstanbul", "Yazılım", "Kadın");
			echo $Kart;
			echo "<br><br>";
		$Kart 	=	IslemYap("Umut", "Cesur", "11.06.2002", "19", "Karabük", "Yazılım", "Erkek");
			echo $Kart;
	
	?>
</body>
</html>