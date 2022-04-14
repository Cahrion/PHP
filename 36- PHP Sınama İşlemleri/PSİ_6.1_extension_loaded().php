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
		extension_loaded()		= Belirtilecek olan PHP eklentisinin yüklü olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	$Eklenti 	= "ffmpeg";
	
	if(extension_loaded($Eklenti)){
		echo "Kontrol etmiş olduğunuz <b>" . $Eklenti . "</b> eklentisi sisteme yüklüdür.";
	}else{
		echo "Kontrol etmiş olduğunuz <b>" . $Eklenti . "</b> eklentisi sisteme yüklü değildir..";
	}
	
	?>
</body>
</html>