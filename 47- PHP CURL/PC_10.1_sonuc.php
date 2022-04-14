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
	
		CURLFile 	=  Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlandıktan sonra, CURLOPT_POSTFIELDS dahilinde karşı server'a (sunucuya) dosya yüklemek için kullanılır.
	
	*/
	
	$GelenDosyaAdi 			= $_FILES["Dosya"]["name"];
	$GelenDosyaTuru 		= $_FILES["Dosya"]["type"];
	$GelenDosyaTempAdi		= $_FILES["Dosya"]["tmp_name"];
	$GelenDosyaHataDegeri 	= $_FILES["Dosya"]["error"];
	$GelenDosyaBoyutu 		= $_FILES["Dosya"]["size"];
	$Uzanti = substr($GelenDosyaAdi, -4);
		if($Uzanti == "jpeg"){
			$UzantiOlustur = "." . $Uzanti; 
		}else{
			$UzantiOlustur = $Uzanti;
		}
	$Isim 		= md5(uniqid(mt_rand()));
	$Olustur 	= $Isim . $UzantiOlustur;
	
	if($GelenDosyaTuru == "image/png"){ // İllaki dosya türü image olması istenebilir.
		if(move_uploaded_file($GelenDosyaTempAdi, $Olustur)){
			echo "Dosya Yükleme İşlemi Başarıyla Tamamlandı. <br>";
			echo "<img src='" . $Olustur . "'><br>";
			echo "Orjinal Dosya adı: " . $GelenDosyaAdi . "<br>";
			echo "Yüklenen Dosya adı: " . $Olustur . "<br>";
			echo "Yüklenen Dosya Türü: " . $GelenDosyaTuru . "<br>";
			echo "Yüklenen Dosya Boyutu: " . $GelenDosyaBoyutu .  " Byte";


		}else{
			echo "Dosya yükleme işlemi sırasında beklenmeyen bir hata oluştu.";
		}
	}else{
		echo "Dosya yükleme işlemi sırasında istenmeyen bir dosya algılandı.";
	}
	
	
	?>
</body>
</html>