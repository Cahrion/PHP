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
		
			rad2deg()	=	Radyan değeri cinsinden herhangi bir sayının, decere değeri cinsinden karşılığını bularak, bulduğu değeri geriye döndürür.
			deg2rad()	=	Derece değeri cinsinden herhangi bir sayının, radyan değeri cinsinden karşılığını bularak, bulduğu değeri geriye döndürür.
			
		*/
	$Deger 		= 1.5;
	$Deg 		= rad2deg($Deger);
	
		echo "Radyan Değeri: " . $Deger . "<br>";
		echo "Derece Değeri: " . $Deg;
	
	?>
</body>
</html>