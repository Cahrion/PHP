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
	
		define("ISIM", "Icabi Kırgız"); 
		function IsimGonder(){
			echo "İsim: " . ISIM . "<br>"; // Sabitlerde kapsama alanı yoktur.
		}
		IsimGonder();
	
	?>
</body>
</html>