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
	
		function ParaBirimi($Birim, $Tutar){
			if($Birim == "Türk Lirası"){
				$Kur 		= 1;
			}elseif($Birim == "Amerikan Doları"){
				$Kur 		= 8;
			}elseif($Birim == "Euro"){
				$Kur 		= 10;
			}else{
				$Kur 		= 0;
			}
			
			return Hesapla($Birim, $Kur, $Tutar);
		}
		function Hesapla($Birim,$KurBilgisi, $TutarBilgisi){
			$Sonuc 	= $KurBilgisi * $TutarBilgisi;
			echo "Girilen " . $TutarBilgisi . " " . $Birim . " tutarının TL karşılığı: " . $Sonuc . "<br>";
			echo "Kur : " . $KurBilgisi;
		}
		ParaBirimi("Amerikan Doları", 1000);
	?>
</body>
</html>