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
		array_unshift() 	= Dizinin en başına yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı degerini geriye döndurur.
		
		array_push() 		= Dizinin en sonuna yeni eleman veya elemanlar eklemek için kullanılır. Aynı zamanda eklenecek olan eleman veya elemanların diziye dahil edilmesi ile, dizi içeriğinin toplam eleman sayısı degerini geriye döndurur.
	*/
	
	$Isimler 	= array("Volkan","Hakan","Onur","Levent",array("Banu","Aslı","Nurgul"),"Serkan","Eray","Doğan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	
	$DizininElemanSayisi 	= array_unshift($Isimler,"Icabi"); // geriye dönen veri count() parametresi gibi çalışır.
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	echo "Dizi içerisindeki eleman sayısı: " . $DizininElemanSayisi . "<br>";
	
	
	$DizininElemanSayisi2 	= array_push($Isimler,"Zafer"); // geriye dönen veri count() parametresi gibi çalışır.
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	echo "Dizi içerisindeki eleman sayısı: " . $DizininElemanSayisi2 . "<br>";
	
	
	?>
</body>
</html>