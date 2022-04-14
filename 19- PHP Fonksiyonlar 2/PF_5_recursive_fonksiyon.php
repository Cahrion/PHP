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
	function IslemYap($Sayi){ // (Recursive fonksiyon) (Kendi kendine çağıran fonksiyon yapısı)
		if($Sayi <= 12){
			echo $Sayi . "<br>";
			$Deger = $Sayi + 1;
			IslemYap($Deger);
		}else{
			echo "Sayiniz 12'yi geçmek üzere";
		}
	}
	IslemYap(1);
		
	?>
</body>
</html>