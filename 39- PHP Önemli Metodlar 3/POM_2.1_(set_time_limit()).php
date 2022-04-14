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
	
	echo "Varsayılan max_execution_time yönergesi değeri: " . ini_get("max_execution_time") . "sn<br>";
	set_time_limit(1); // Bende işe yaramadı (31.05.2021)
	echo "Atanan max_execution_time yönergesi değeri: " . ini_get("max_execution_time") . "sn";
	echo date("H:i:s");
	
	$Sayi 		= 1;
	
	while($Sayi  < 1000000000000){
		echo $Sayi . " ";
		$Sayi++;
	}
	
	echo date("H:i:s");
	
	
	
	?>
</body>
</html>