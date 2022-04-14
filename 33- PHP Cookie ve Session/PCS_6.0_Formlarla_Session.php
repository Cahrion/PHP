<?php
require_once("PCS_6.3_Formlarla_Session_ayar.php");
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
	<form action="PCS_6.1_Formlarla_Session_sonuc.php" method="post">
		Kullanıcı Adı: <br>
		<input type="text" name="KullaniciAdi"><br>
		Kullanıcı Şifresi: <br>
		<input type="text" name="KullaniciSifresi"><br>
		<input type="submit" value="Giriş Yap">
	</form>
</body>
</html>