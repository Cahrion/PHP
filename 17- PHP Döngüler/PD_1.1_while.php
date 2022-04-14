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
		while 	= Döngü işlemi başlatır.
		
		YAPISI 	=
		while(Koşul){
			Kod blokları
		}
	*/
	
	$BaslangicDegeri 	= 1;
	
	while($BaslangicDegeri <= 10){
		
			echo "Döngü Çalışma Numarası : " . $BaslangicDegeri . "<br>";
		
		// Kolayca break komutuyla çıkış yapılabilir.
		if($BaslangicDegeri == 8){
			break;
		}
		
			$BaslangicDegeri++;
	}
	

	?>
</body>
</html>