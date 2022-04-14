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
		count() 			= Dizi içerisindeki eleman sayısını bulmak için kullanılır.
		sizeof() 			= Dizi içerisindeki eleman sayısını bulmak için kullanılır.
		COUNT_RECURSIVE 	= Çok boyutlu dizilerde, tüm boyutlar içerisindeki elemanlarda sayma işlemine dahil edilir.
	*/
	
	$Isimler 	= array("Volkan","Hakan","Onur","Levent","Serkan","Eray","Doğan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	
	$DizininElemanSayisi 	= count($Isimler);
	$DizininElemanSayisi2 	= sizeof($Isimler);
	
	echo "Dizi içerisindeki eleman sayısı: " . $DizininElemanSayisi . " count()<br>";
	echo "Dizi içerisindeki eleman sayısı: " . $DizininElemanSayisi2 . " sizeof()";
	
	
	?>
</body>
</html>