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

	$Bir 		= 5;
	$Iki 		= 8;
		
	printf($Bir + $Iki); // Normal toplamalar toplama gibi yapar lakin ;
	echo "<br>";	
	$Deger 	= sprintf($Bir + $Iki);  
	echo $Deger . "<br>";
	
	printf("%s + %s",$Bir,$Iki); // %s kullanıldığında integer verileri de string bir veriymiş gibi alır.
	echo "<br>";	
	$Deger 	= sprintf("%s + %s",$Bir,$Iki); 
	echo $Deger;
	
	?>
</body>
</html>