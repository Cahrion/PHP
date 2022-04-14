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

	$DegerBir 		= 73;
	$DegerIki 		= 99;
	$DegerUc 		= 97;
	$DegerDort 		= 98;
	$DegerBes 		= 105;
	
	printf("73,99,97,98,105 Kodunun ASCII karşılığı: %c%c%c%c%c", $DegerBir, $DegerIki, $DegerUc, $DegerDort, $DegerBes); // ASCII kodlarını da alabilir
	echo "<br>";	
	$Deger 	= sprintf("73,99,97,98,105 Kodunun ASCII karşılığı: %c%c%c%c%c", $DegerBir, $DegerIki, $DegerUc, $DegerDort, $DegerBes);
	echo $Deger;
	
	?>
</body>
</html>