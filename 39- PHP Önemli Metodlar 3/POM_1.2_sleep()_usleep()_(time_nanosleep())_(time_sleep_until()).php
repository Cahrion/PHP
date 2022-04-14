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
	sleep() 			= Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan saniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	usleep() 			= Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan mikrosaniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	time_nanosleep() 	= Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan saniye ve nanosaniye kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	time_sleep_until() 	= Kullanıldığı satırdan sonraki tüm kodlamanın belirtilecek olan Unix zaman damgası geçerli zamanına kadar bekleterek, süre tamamlandığında çalıştırmak için kullanılır.
	*/
	
	echo date("h:i:s") . "<br>";
	usleep(4500000); // 4.5sn = 4.500.000 mikro saniye.
	// Bütün sayfayı 5sn bekletir. (Ama üsttekileri okur. Yansıtmayı bütün kod olunca yansıtır.)
	echo date("h:i:s");
	
	
	?>
</body>
</html>