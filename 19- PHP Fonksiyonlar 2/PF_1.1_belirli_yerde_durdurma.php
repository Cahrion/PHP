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
		function Islem($MaksimumTaksit=1){
			echo "Kredi kartı ile tek çekimli sepet tutarı: 1.000TL <br>";
			if($MaksimumTaksit == 1){
				return;
			}
			echo "Kredi kartı ile 2  taksitli sepet tutarı: 1.010TL <br>";
			if($MaksimumTaksit == 2){
				return;
			}
			echo "Kredi kartı ile 3  taksitli sepet tutarı: 1.020TL <br>";
			if($MaksimumTaksit == 3){
				return;
			}
			echo "Kredi kartı ile 4  taksitli sepet tutarı: 1.030TL <br>";
			if($MaksimumTaksit == 4){
				return;
			}
			echo "Kredi kartı ile 5  taksitli sepet tutarı: 1.040TL <br>";
			if($MaksimumTaksit == 5){
				return;
			}
			echo "Kredi kartı ile 6  taksitli sepet tutarı: 1.050TL <br>";
			if($MaksimumTaksit == 6){
				return;
			}
			echo "Kredi kartı ile 7  taksitli sepet tutarı: 1.060TL <br>";
			if($MaksimumTaksit == 7){
				return;
			}
			echo "Kredi kartı ile 8  taksitli sepet tutarı: 1.070TL <br>";
			if($MaksimumTaksit == 8){
				return;
			}
			echo "Kredi kartı ile 9  taksitli sepet tutarı: 1.080TL <br>";
			if($MaksimumTaksit == 9){
				return;
			}
			echo "Kredi kartı ile 10 taksitli sepet tutarı: 1.090TL <br>";
			if($MaksimumTaksit == 10){
				return;
			}
			echo "Kredi kartı ile 11 taksitli sepet tutarı: 1.100TL <br>";
			if($MaksimumTaksit == 11){
				return;
			}
			echo "Kredi kartı ile 12 taksitli sepet tutarı: 1.110TL <br>";
		}
		Islem(6);
	?>
</body>
</html>