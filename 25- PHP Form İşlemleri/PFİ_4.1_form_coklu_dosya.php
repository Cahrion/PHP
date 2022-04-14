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

		$GelenDosyalar 		= $_FILES["Dosyalar"];
		
		foreach($GelenDosyalar["tmp_name"] as $Anahtar => $Eleman){
			$AnahtarDegeri 		= $Anahtar;
			$DosyaAdiDegeri 	= $GelenDosyalar["name"][$Anahtar];
			$DosyaTuruDegeri 	= $GelenDosyalar["type"][$Anahtar];
			$Dosyatempdegeri 	= $GelenDosyalar["tmp_name"][$Anahtar];
			$Dosyaerrordegeri 	= $GelenDosyalar["error"][$Anahtar];
			$Dosyaboyutdegeri 	= $GelenDosyalar["size"][$Anahtar];
			
			$DosyaDizinYeri		= "Dokumanlar/".$DosyaAdiDegeri;
			
			if(move_uploaded_file($Dosyatempdegeri, $DosyaDizinYeri)){
				echo "Anahtar: " . $AnahtarDegeri . "<br>";
				echo "Dosya Adi: " . $DosyaAdiDegeri . "<br>";
				echo "Dosya Türü: " . $DosyaTuruDegeri . "<br>";
				echo "Dosya Gecici dizini ve temp adı: " . $DosyaTuruDegeri . "<br>";
				echo "Dosya Hata Durumu: " . $Dosyaerrordegeri . "<br>";
				echo "Dosya Boyutu: " . $Dosyaboyutdegeri . "<br><br>";

			}else{
				echo "Dosya Yükleme İşlemi Sırasında Hata Oluştu. <br>";
			}
			
		}
	
	?>
</body>
</html>