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
	
	set_time_limit(86400); // 86400'den (1 Günden) fazla çalışmasın demek.
	
	echo "Atanan max_execution_time yönergesi değeri: " . ini_get("max_execution_time") . "sn";
	
	
	?>
</body>
</html>