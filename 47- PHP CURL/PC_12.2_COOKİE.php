<?php
	session_start();
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
	
		CURLOPT_COOKIE		= Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olna yeni cookie (çerez) / cookie'lar (çerezler) oluşturmak için kullanılır
		CURLOPT_COOKIEJAR	= Başlatılmış olan bir CURL oturumu sonlandırıldığında / kapaptıldığında daha önceden oluşmuş olan cookie'lerin (çerezlerin) kaydedileceği dosyayı tanımlamak için kullanılır.
		CURLOPT_COOKIEFILE	= Başlatılmış olan bir CURL oturumunda istenilen URL adresinde kullanılacak olan cookie'lerin (çerezlerin) tutulduğu dosyayı belirtmek ve içeriğindeki değerleri karşı server'a (sunucuya) iletmek için kullanılır.
 
	*/
	?>
	<form action="PC_12.3_COOKİE_sonuc.php" method="post">
		Kullanici Adı: <input type="text" name="KullaniciAdi"><br>
		Şifre: <input type="text" name="KullaniciSifre"><br>
		<input type="submit" value="Giris Yap">
	</form>
</body>
</html>