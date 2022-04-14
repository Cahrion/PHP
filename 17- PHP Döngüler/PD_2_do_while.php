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
		do while 	= Döngü işlemi başlatır.
		
		YAPISI 	=
		do{
			Kod blokları
		}while(Koşul);
	*/
	
	$BaslangicDegeri 	= 1;
	
	do{
		echo "Döngü Çalışma Numarası : " . $BaslangicDegeri . "<br>";
		
		$BaslangicDegeri++;
	}while($BaslangicDegeri <= 10)
	

	?>
</body>
</html>