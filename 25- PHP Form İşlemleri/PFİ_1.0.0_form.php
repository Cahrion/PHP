<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	<form action="PFİ_1.0.1_form_sonuc.php" method="get">
		Adınız Soyadınız: <input type="text" name="AdSoyad"> <br>
		E-Mail Adresiniz: <input type="email" name="EmailAdresi"> <br>
		Telefonunuz: <input type="text" name="Telefon"> <br>
		Cinsiyetiniz: <input type="radio" name="Cinsiyet" value="Erkek"> Erkek <input type="radio" name="Cinsiyet" value="Kadın"> Kadın <br>
		Yaşınız: <select name="Yas">
			<option value=""></option>
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option value="40">40</option>
			<option value="50">50</option>
			<option value="60">60</option>
			<option value="70">70</option>
		</select>
		
		<input type="submit" value="Gönder">
	</form>
</body>
</html>