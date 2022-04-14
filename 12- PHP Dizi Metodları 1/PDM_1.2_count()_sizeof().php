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
	
	$Isimler 	= array("Volkan","Hakan","Onur",array("Banu","Derya",array("Mavi","Kırmızı","Siyah"),"Aslı","Hale"),"Levent","Serkan","Eray","Doğan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	
	$DizininElemanSayisi 	= count($Isimler[3]);
	$DizininElemanSayisi2 	= sizeof($Isimler[3]);
	
	echo "Düzeltilmemiş hal <br>";	
	echo "Dizi içerisindeki eleman sayısı: " . $DizininElemanSayisi . " count()<br>";
	echo "Dizi içerisindeki eleman sayısı: " . $DizininElemanSayisi2 . " sizeof()";
	
	$DizininElemanSayisi 	= count($Isimler[3], COUNT_RECURSIVE);
	$DizininElemanSayisi2 	= sizeof($Isimler[3], COUNT_RECURSIVE); 
	// Array halinide bir dizi olarak sayar yani 9 adet veri olsa bile 10 adet veri olarak ele alır çünkü arrayleride yapı olarak var sayar.
	
	echo "<br><br>Düzeltilmiş hal <br>";	
	echo "Dizi içerisindeki eleman sayısı: " . $DizininElemanSayisi . " count()<br>";
	echo "Dizi içerisindeki eleman sayısı: " . $DizininElemanSayisi2 . " sizeof()";
	
	
	?>
</body>
</html>