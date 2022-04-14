<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	<form action="PFİ_4.1_form_coklu_dosya.php" method="post" enctype="multipart/form-data"> <!-- Dosya yüklemek için gerekli. -->
		Yüklenecek Olan Dosya: <input type="file" name="Dosyalar[]" multiple> <br>
		<!-- Çoklu seçim yapmak için = multiple (eki gereklidir)-->
		
		<input type="submit" value="Dosyaları Yükle">
	</form>
</body>
</html>