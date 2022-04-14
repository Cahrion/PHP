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
	
		CURLOPT_POST 		= Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlamak için kullanılır.
		CURLOPT_POSTFIELDS 	=  Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işleminde veri veya verileri tanımlamak için kullanılır.
	
	*/
	?>
	
	<form action="PC_9.1_sonuc.php" method="post">
		Adınız Soyadınız: <input type="text" name="AdiSoyadi"> <br>
		E-Mail Adresiniz: <input type="email" name="EmailAdresi"> <br>
		Telefonunuz: <input type="text" name="Telefon"> <br>
		Cinsiyetiniz: <input type="radio" name="Cinsiyet" value="Erkek">Erkek <input type="radio" name="Cinsiyet" value="Kadın">Kadın <br>
		Yaşınız: <select name="Yas">
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
		</select>
		<input type="submit" value="Gönder">
	</form>
	
	
	
</body>
</html>