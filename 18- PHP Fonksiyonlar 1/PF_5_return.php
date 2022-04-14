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
		
	function Islem(){
		$IsimSoyisim 	= "Icabi Kırgız";
		return $IsimSoyisim;
	}
	$Sonuc 	= Islem();
	if($Sonuc == "Icabi Kırgız"){
		echo $Sonuc . " bir yazılım ve programlama geliştirme öğrencisidir.";
	}else{
		echo "Kişi tanınmıyor.";
	}
	
	?>
</body>
</html>