<?php
if(isset($_POST["IsimSoyisim"])){
	$GelenIsimSoyisim 		= GuvenlikFiltresi($_POST["IsimSoyisim"]);
}else{
	$GelenIsimSoyisim 		= "";
}
if(isset($_POST["EmailAdresi"])){
	$GelenEmailAdresi 		= GuvenlikFiltresi($_POST["EmailAdresi"]);
}else{
	$GelenEmailAdresi 		= "";
}
if(isset($_POST["TelefonNumarasi"])){
	$GelenTelefonNumarasi 	= GuvenlikFiltresi($_POST["TelefonNumarasi"]);
}else{
	$GelenTelefonNumarasi 	= "";
}
if(isset($_POST["BankaSecimi"])){
	$GelenBankaSecimi 		= GuvenlikFiltresi($_POST["BankaSecimi"]);
}else{
	$GelenBankaSecimi 		= "";
}
if(isset($_POST["Aciklama"])){
	$GelenAciklama 			= GuvenlikFiltresi($_POST["Aciklama"]);
}else{
	$GelenAciklama 			= "";
}

if( ($GelenIsimSoyisim!="") and ($GelenEmailAdresi!="") and ($GelenTelefonNumarasi!="") and ($GelenBankaSecimi!="")){
	$HavalBildirimSorgusu	= $VeritabaniBaglantisi->prepare("INSERT INTO havalebildirimleri (BankaId, AdiSoyadi, EmailAdresi, TelefonNumarasi, Aciklama, IslemTarihi, durum) values (?, ?, ?, ?, ?, ?, ?)");
	$HavalBildirimSorgusu->execute([$GelenBankaSecimi, $GelenIsimSoyisim, $GelenEmailAdresi, $GelenTelefonNumarasi, $GelenAciklama, $ZamanDamgasi, 0]);
	$HavaleBildirimiSay 	= $HavalBildirimSorgusu->rowCount();
	
	if($HavaleBildirimiSay > 0){
		header("Location: index.php?SK=11");
		exit();
	}else{
		header("Location: index.php?SK=12");
		exit();
	}
}else{
	header("Location: index.php?SK=13");
	exit();
}
?>