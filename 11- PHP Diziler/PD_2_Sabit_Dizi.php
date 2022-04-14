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
		define("DEGERLER",array("Volkan", "Hakan", "Onur"));
		const DEGERLER2 = array("Volkan2", "Hakan2", "Onur2");
	
		echo "<pre>";
		print_r(DEGERLER);
		echo DEGERLER[0];
		echo "<br>CONST<br><br>";
		print_r(DEGERLER2);
		echo DEGERLER[0];
		echo "</pre>";
	?>
</body>
</html>