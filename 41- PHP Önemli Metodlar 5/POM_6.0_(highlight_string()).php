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
		highlight_string() 	= Belirtilecek olan herhangi bir PHP kodlamasını, PHP'nin yerleşik söz dilimi vurgulayıcısında tanımlanmış olan renkleri kullanarak vurgulu bir halde ekran çıktılanmasını sağlamak için kullanılır.
			
	*/
	
	highlight_string('<?php phpinfo(); ?>');
	echo "<br>";
	highlight_string('<?php echo "Volkan Alakent"; ?>'); // Yazılımı ortaya çıkarttı "echo" yapısında çalışmaz.
	
	?>
</body>
</html>