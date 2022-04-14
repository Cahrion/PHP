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
		if(!$_POST){
	?>
		<form action="index.php" method="post"> 
			Adınız Soyadınız: <input type="text" name="AdSoyad"><br>
			Telefon Numaranız: <input type="text" name="Telefon"><br>
			E-mail Adresiniz: <input type="email" name="EmailAdresi"><br>
			Mesajınız: <textarea name="Mesaj" ></textarea><br>

			<input type="submit" value="Gönder">
		</form>
	<?php
		}else{
				$GelenAdSoyadDegeri		= $_POST["AdSoyad"];
				$GelenTelefonDegeri		= $_POST["Telefon"];
				$GelenEmailAdresiDegeri = $_POST["EmailAdresi"];
				$GelenMesajDegeri		= $_POST["Mesaj"];
			
			echo "Adınız Soyadınız: " . $GelenAdSoyadDegeri . "<br>";
			echo "Telefon Numaranız: " . $GelenTelefonDegeri . "<br>";
			echo "E-mail Adresiniz: " . $GelenEmailAdresiDegeri . "<br>";
			echo "Mesajınız: " . $GelenMesajDegeri;
		}
	?>
</body>
</html>