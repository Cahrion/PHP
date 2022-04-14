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
			move_uploaded_file()	= Herhangi bir dosyayı belirtilecek olan dizine yüklemek için kullanılır.
		*/
	?>
	<form action="PFİ_3.1_form_dosya.php" method="post" enctype="multipart/form-data"> <!-- Dosya yüklemek için gerekli. -->
		Yüklenecek Olan Dosya: <input type="file" name="Dosya"> <br>
		
		<input type="submit" value="Dosyayı Yükle">
	</form>
</body>
</html>