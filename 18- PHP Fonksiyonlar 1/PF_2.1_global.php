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
	
		$Isim 			= "Icabi Kırgız"; 
		$Soyisim 		= "Kırgız"; 
		function IsimGonder(){
			global $Isim; // Sadece $Isim değişkeni eklenmiş
			echo "İsim: " . $Isim . "<br>";
			echo "Soyisim: " . $Soyisim . "<br>"; // HATA (Kapsama alanında değil (Eklenirse düzelir.))
		}
		IsimGonder();
	
	?>
</body>
</html>