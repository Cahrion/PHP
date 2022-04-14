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
	
		CURLFile 	=  Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlandıktan sonra, CURLOPT_POSTFIELDS dahilinde karşı server'a (sunucuya) dosya yüklemek için kullanılır.
	
	*/
	?>
	
	<form action="Sonuc.php" method="post" enctype="multipart/form-data">
		Yüklenecek olan dosya: <input type="file" name="Dosya"><br>
		<input type="submit" value="Yükle">
	</form>
	
</body>
</html>