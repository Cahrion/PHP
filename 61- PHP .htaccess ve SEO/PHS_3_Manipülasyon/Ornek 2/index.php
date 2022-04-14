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
	<a href="index.php?sayfa=1">Ana Sayfa</a> |
	<a href="index.php?sayfa=2">Ürunler</a> |
	<a href="index.php?sayfa=3">Hakkımızda</a> |
	<a href="index.php?sayfa=4">Sözleşmeler</a> |
	<a href="index.php?sayfa=5">İletişim</a> <br><br>
	
	Manipüle Menüler : <br>
	<a href="1">Ana Sayfa</a> |
	<a href="2">Ürunler</a> |
	<a href="3">Hakkımızda</a> |
	<a href="4">Sözleşmeler</a> |
	<a href="5">İletişim</a>  <br><br>
	
	<?php
	if(isset($_GET["sayfa"])){
		$GelenSayfaDegeri 	= $_GET["sayfa"];
	}else{
		$GelenSayfaDegeri 	= "";
	}
	if($GelenSayfaDegeri == "1"){
		require_once("anasayfa.php");
	}elseif($GelenSayfaDegeri == "2"){
		require_once("Urunler.php");
		
	}elseif($GelenSayfaDegeri == "3"){
		require_once("Hakkimizda.php");
		
	}elseif($GelenSayfaDegeri == "4"){
		require_once("Sozlesmeler.php");
		
	}elseif($GelenSayfaDegeri == "5"){
		require_once("Iletisim.php");
	}
	?>
	
</body>
</html>