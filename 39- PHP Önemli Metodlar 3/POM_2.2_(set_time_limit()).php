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
	set_time_limit() 	= Çalışmakta olan bir PHP dosyası için belirtilecek olan değer doğrultusunda azami / maksimum çalışma süresi değeri atamak için kullanılır. 
	*/
	
	echo "Varsayılan max_execution_time yönergesi değeri: " . ini_get("max_execution_time") . "sn <br>";
	set_time_limit(8); // Çalıştı.
	echo "Atanan max_execution_time yönergesi değeri: " . ini_get("max_execution_time") . "sn <br>";
	echo date("H:i:s") . "<br><br>";
	
	$Sayi 		= 1;
	
	while($Sayi  < 5){
		echo $Sayi . " ";
		sleep(2);
		$Sayi++;
	}
	
	echo "<br><br>" . date("H:i:s");
	
	?>
</body>
</html>