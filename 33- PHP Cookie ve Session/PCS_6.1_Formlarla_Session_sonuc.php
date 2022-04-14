<?php
require_once("ayar.php");
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
	$GelenAd 		= $_POST["KullaniciAdi"];
	$GelenSoyad 	= $_POST["KullaniciSifresi"];
	if(($GelenAd != "") and ($GelenSoyad != "")){
		$_SESSION["KullaniciAdi"]			= $GelenAd;
		$_SESSION["KullaniciSifresi"]		= $GelenSoyad;
		echo "Merhaba " . $GelenAd . ", siteye giriş başarılı.";
		echo "<a href='PCS_6.2_Formlarla_Session_cikis.php'>Çıkış Yap</a>";
	}else{
		echo "Merhaba lütfen formda herhangi bir boş alan bırakmayınız.";
		echo "<a href='PCS_6.0_Formlarla_Session.php'>Forma Dön</a>";
	}	
	?>
</body>
</html>