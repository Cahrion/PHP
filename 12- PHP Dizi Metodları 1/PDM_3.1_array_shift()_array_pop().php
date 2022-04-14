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
	
	$Isimler 	= array(array("Banu","Aslı","Nurgul"),"Volkan","Hakan","Onur","Levent","Serkan","Eray","Doğan",array("Mavi","Kırmızı","Beyaz"));
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	
	$BastanSilinen 	= array_shift($Isimler); // Eğer farklı bir sıralama yaptıysanız bu sayısal sıralamada bir altta alıcak ve sıralamayı bozacaktır.
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	echo "Dizi içerisindeki eleman sayısı: " . $BastanSilinen . "<br>"; // !HATA
	// array dosyasını sildiğimiz için gözükmez lakin print_r() kullanılabilir.
	print_r($BastanSilinen);
	
	
	$SondanSilinen 	= array_pop($Isimler); 
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	echo "Dizi içerisindeki eleman sayısı: " . $SondanSilinen . "<br>"; // !HATA
	// array dosyasını sildiğimiz için gözükmez lakin print_r() kullanılabilir.
	print_r($SondanSilinen);
	
	
	
	?>
</body>
</html>