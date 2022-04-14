<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
		<form name="BirinciForm" action="PFİ_6.0.1_birdenfazla_form.php" method="get"> 
			Adınız: <input type="text" name="Ad"><br>
			Soyadınız: <input type="text" name="Soyad"><br>
			Telefon Numaranız: <input type="text" name="Telefon"><br>
			E-mail Adresiniz: <input type="email" name="EmailAdresi"><br>
			<input type="submit" value="1. Formu Gönder">
		</form>
	<br><br> <!-- [ÖNEMLİ] İki form varsa ikisinede isim verilmesi gereklidir.-->
		<form name="IkinciForm"  action="PFİ_6.0.2_birdenfazla_form.php" method="get"> 
			Adınız: <input type="text" name="Ad"><br>
			Soyadınız: <input type="text" name="Soyad"><br>
			Telefon Numaranız: <input type="text" name="Telefon"><br>
			E-mail Adresiniz: <input type="email" name="EmailAdresi"><br>
			<input type="submit" value="2. Formu Gönder">
		</form>
</body>
</html>