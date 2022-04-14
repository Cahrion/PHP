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
			min() 	= Değişken içeriklerin veya dizi elemanlarının rakamsal değerler içermesi durumunda en küçük rakamsal değeri bularak, bulduğu değeri geriye döndürür.
			max() 	= Değişken içeriklerin veya dizi elemanlarının rakamsal değerler içermesi durumunda en büyük rakamsal değeri bularak, bulduğu değeri geriye döndürür.
		*/
	
	$MinnakRakamlar = min(5, 6, 78, 9, 15, 17, 13, 19);
	
		echo "Değişkenin en küçük eleman değeri: " . $MinnakRakamlar . "<br>";
	
	$DevRakamlar 	= max(5, 6, 78, 9, 15, 17, 13, 19);
		echo "Değişkenin en büyük eleman değeri: " . $DevRakamlar . "<br>";
	
	?>
</body>
</html>