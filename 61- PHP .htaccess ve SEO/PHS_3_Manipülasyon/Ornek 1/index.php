<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	Standart Menüler : <br>
	<a href="index.php?sayfa=Anasayfa">Ana Sayfa</a> |
	<a href="index.php?sayfa=Urunler">Ürunler</a> |
	<a href="index.php?sayfa=Hakkimizda">Hakkımızda</a> |
	<a href="index.php?sayfa=Sozlesmeler">Sözleşmeler</a> |
	<a href="index.php?sayfa=Iletisim">İletişim</a> <br><br>
	
	Manipüle Menüler : <br>
	<a href="Anasayfa">Ana Sayfa</a> |
	<a href="Urunler">Ürunler</a> |
	<a href="Hakkimizda">Hakkımızda</a> |
	<a href="Sozlesmeler">Sözleşmeler</a> |
	<a href="Iletisim">İletişim</a>  <br><br>
	
	<?php
	if(isset($_GET["sayfa"])){
		$GelenSayfaDegeri 	= $_GET["sayfa"];
	}else{
		$GelenSayfaDegeri 	= "";
	}
	if($GelenSayfaDegeri == "Anasayfa"){
		require_once("anasayfa.php");
	}elseif($GelenSayfaDegeri == "Urunler"){
		require_once("Urunler.php");
		
	}elseif($GelenSayfaDegeri == "Hakkimizda"){
		require_once("Hakkimizda.php");
		
	}elseif($GelenSayfaDegeri == "Sozlesmeler"){
		require_once("Sozlesmeler.php");
		
	}elseif($GelenSayfaDegeri == "Iletisim"){
		require_once("Iletisim.php");
	}
	?>
	
</body>
</html>