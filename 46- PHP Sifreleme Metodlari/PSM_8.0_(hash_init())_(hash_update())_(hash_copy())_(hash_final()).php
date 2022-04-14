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
			
	$Icerik 		= "Icabi Kırgız - IK System";
	echo "Orjinal içerik: ". $Icerik . "<br>";
	
	$Sifreleme 		= hash_init("md5"); // metodu tanımladık.
	hash_update($Sifreleme, $Icerik); // içeriği dahil ettik.
	
	$Sonuc 			= hash_final($Sifreleme); // Sonlandırdık.
	echo "Parçalı yapıda oluşturulmuş md5 özeti: " . $Sonuc;
	
	?>
</body>
</html>