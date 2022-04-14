<?php
	ob_start(); // Çıktı tamponlaması başlatıldı.
?>
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
		ob_start() 			= PHP sayfası dahilinde çıktı tamponlamasını başlatır.
		ob_end_clean()		= PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlamasını siler ve çıktı tamponlamasını kapatır.
		ob_end_flush()		= PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlamasını boşaltır ve çıktı tamponlamasını kapatır.
		ob_get_contents()	= PHP sayfası dahilinde başlatılmış olan ve veri depolayan çıktı tamponlaması içeriğini bularak, bulduğu değeri geriye döndürür.
	*/
	
	
	
	
	?>
</body>
</html>
<?php
	ob_end_flush() // Çıktı tamponlaması boşaltıldı ve kapatıldı. (EN COK KULLANILAN) (ob_end_clean'a göre)
?>