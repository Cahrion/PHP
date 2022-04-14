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

	$MetinBir 	= 8;
	$MetinIki 	= 80;
	$MetinUc 	= 800;
	$MetinDort 	= 8000;
	$MetinBes 	= 80000;
	
	printf("%'05d", $MetinBir);
	echo "<br>";
	printf("%'05d", $MetinIki);
	echo "<br>";
	printf("%'05d", $MetinUc);
	echo "<br>";
	printf("%'05d", $MetinDort);
	echo "<br>";
	printf("%'05d", $MetinBes);
	echo "<br><br>";

	$DegerBir 	= sprintf("%'05d", $MetinBir);	
	echo $DegerBir . "<br>";
	$DegerIki 	= sprintf("%'05d", $MetinIki);	
	echo $DegerIki . "<br>";
	$DegerUc 	= sprintf("%'05d", $MetinUc);	
	echo $DegerUc . "<br>";
	$DegerDort 	= sprintf("%'05d", $MetinDort);	
	echo $DegerDort . "<br>";
	$DegerBes 	= sprintf("%'05d", $MetinBes);	
	echo $DegerBes;
	
	?>
</body>
</html>