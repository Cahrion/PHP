<?php
	session_start(); ob_start(); // sessionlar başlatıldı ve aynı zamanda Çıktı tamponlaması başlatıldı.
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
	
	echo "Icabi Kırgız <br>";
	
	$DepoBir 	= ob_get_contents();
	
	echo "IK şirketi <br><br>";// Buralar gözükmez.
	
	$DepoIki 	= ob_get_contents();
	
	ob_end_clean(); // Üst tarafında kalan bütün alanı siler bu yüzden kodda yansırken gelmez ama alt tarafı görülebilir.
	
	echo $DepoBir . "Sadece burayı görüyorsunuz.";
	
	
	?>
</body>
</html>
<?php
	ob_end_flush() // Çıktı tamponlaması boşaltıldı ve kapatıldı. (EN COK KULLANILAN) (ob_end_clean'a göre)
?>