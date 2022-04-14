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
			
			hash_init() 	= hash özeti üretme işlemlerini başlatmak ve algoritma türünü belirtmek için kullanılır.
			hash_update() 	= Belirtilecek olan içeriği, daha önceden hash özeti üretme işlemi başlatılmış bir işleme dahil etmek için kullanılır.
			hash_copy() 	= hash özeti üretme işlemlerini başlatmak ve algoritma türünü belirlemek için daha önceden oluşturulmuş olan hash_init() metodunu kopyalamak için kullanılır.
			hash_final() 	= Daha öncende hash özeti üretme işlemi başlatılarak içeriğide dahil edilmiş bir işlemin hash özetini üreterek ürettiği değeri geriye döndürür.
			
		*/
			
	$Icerik1 	= "IK System";
	echo "Orjinal içerik 1: ". $Icerik1 . "<br>";
	$Icerik2 	= "Icabi Kırgız";
	echo "Orjinal içerik 2: ". $Icerik2 . "<br>";
	
	$Sifreleme 	= hash_init("md5"); 
	hash_update($Sifreleme, $Icerik1);
	
	$Kopyala	= hash_copy($Sifreleme);
	$SonucBir 	= hash_final($Sifreleme);
	
	echo "md5 özeti: " . $SonucBir . "<br>";
	
	hash_update($Kopyala, $Icerik2); // Sorunsuz bir şekilde çalıştı.
	$SonucIki 	= hash_final($Kopyala);
	echo "md5 özeti: " . $SonucIki . "<br>";
	
	?>
</body>
</html>