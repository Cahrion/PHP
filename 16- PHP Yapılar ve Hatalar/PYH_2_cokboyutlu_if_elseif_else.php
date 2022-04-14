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
	$saat 	= 15;
	
	if(($saat >= 0) and ($saat <= 6)){
		if($saat == 0){
			echo "İyi geceler. Saat şuanda 00:00";
		}
		elseif($saat == 1){
			echo "İyi geceler. Saat şuanda 01:00";
		}
		elseif($saat == 2){
			echo "İyi geceler. Saat şuanda 02:00";
		}
		elseif($saat == 3){
			echo "İyi geceler. Saat şuanda 03:00";
		}
		elseif($saat == 4){
			echo "İyi geceler. Saat şuanda 04:00";
		}
		elseif($saat == 5){
			echo "İyi geceler. Saat şuanda 05:00";
		}
		elseif($saat == 6){
			echo "İyi geceler. Saat şuanda 06:00";
		}
		else{
			echo "Bilinmeyen bir hata oluştu.";
		}
	}elseif(($saat > 6) and ($saat <= 9)){
		if($saat == 7){
			echo "Günaydın. Saat şuanda 07:00";
		}
		elseif($saat == 8){
			echo "Günaydın. Saat şuanda 08:00";
		}
		elseif($saat == 9){
			echo "Günaydın. Saat şuanda 09:00";
		}
		else{
			echo "Bilinmeyen bir hata oluştu.";
		}
	}elseif(($saat > 9) and ($saat <= 17)){
		if($saat == 10){
			echo "İyi günler. Saat şuanda 10:00";
		}
		elseif($saat == 11){
			echo "İyi günler. Saat şuanda 11:00";
		}
		elseif($saat == 12){
			echo "İyi günler. Saat şuanda 12:00";
		}
		elseif($saat == 13){
			echo "İyi günler. Saat şuanda 13:00";
		}
		elseif($saat == 14){
			echo "İyi günler. Saat şuanda 14:00";
		}
		elseif($saat == 15){
			echo "İyi günler. Saat şuanda 15:00";
		}
		elseif($saat == 16){
			echo "İyi günler. Saat şuanda 16:00";
		}
		elseif($saat == 17){
			echo "İyi günler. Saat şuanda 17:00";
		}
		else{
			echo "Bilinmeyen bir hata oluştu.";
		}
	}elseif(($saat > 17) and ($saat <= 23)){
		if($saat == 18){
			echo "İyi akşamlar. Saat şuanda 18:00";
		}
		elseif($saat == 19){
			echo "İyi akşamlar. Saat şuanda 19:00";
		}
		elseif($saat == 20){
			echo "İyi akşamlar. Saat şuanda 20:00";
		}
		elseif($saat == 21){
			echo "İyi akşamlar. Saat şuanda 21:00";
		}
		elseif($saat == 22){
			echo "İyi akşamlar. Saat şuanda 22:00";
		}
		elseif($saat == 23){
			echo "İyi akşamlar. Saat şuanda 23:00";
		}
		else{
			echo "Bilinmeyen bir hata oluştu.";
		}
	}


	?>
</body>
</html>