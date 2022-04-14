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
		printf() 	= Belirtilecek olan içeriiğin, biçimli bir yapıya göre ekran çıktılanmasını sağlamak için kullanılır.
		sprintf() 	= Belirtilecek olan içeriiğin, biçimli bir yapıya göre yeni bir değişken içerisine depolanmasını sağlamak için kullanılır.
	
		NOT !
		~> Sprintf ve printf değerlerinin farkı birinin değişkene atanması diğerinin yazıldığında direkt çıktı yapmasıdır.
	*/
	
	
	
	
	printf("Icabi Kırgız"); // Basit mantık çalışırsa (echo gibi çalışır.)
	echo "<br>";
	$Deger 	= sprintf("Icabi Kırgız");  // Basit mantık çalışırsa değere veri iletir ama direkt çıktı yapmaz.
	echo $Deger;
	
	?>
</body>
</html>