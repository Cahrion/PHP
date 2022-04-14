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

	$Metin 		= 99.99;
	
	printf("Borcunuz %0.3F TL'dir.", $Metin); // Büyük "F" parametresi yereli tanımadan bakar (ingilizce tarayıcıda "," olur.)
	echo "<br>";	
	$Deger 	= sprintf("Borcunuz %0.3F TL'dir.", $Metin);
	echo $Deger;
	
	?>
</body>
</html>