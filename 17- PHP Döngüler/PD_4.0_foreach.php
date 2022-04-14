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
		foreach 	= Diziler için döngü işlemi başlatır.
		
		YAPISI 	=
		forach(Dizi Değişkeni as (Anahtar atanacak değişken) => (Elaman atanacak değişken)){
			Kod blokları
		}
	*/
	
	$Renkler 	= array("Mavi", "Sarı", "Siyah", "Kırmızı", "Gri", "Bordo");
	
	print_r($Renkler);
	
	echo "<br>";
	foreach($Renkler as $Eleman){
		echo $Eleman . "<br>";
	}
	

	?>
</body>
</html>