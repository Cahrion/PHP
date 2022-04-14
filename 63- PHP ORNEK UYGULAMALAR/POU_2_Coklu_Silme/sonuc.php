<?php
require_once("baglan.php");
	
function Filtrele($Deger){
	$Bir 	= trim($Deger);
	$Iki 	= strip_tags($Bir);
	$Uc 	= htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc 	= $Uc;
	return $Sonuc;
}

$GelenSecimDegerleri 	= $_POST["secim"];
$IDleriBirlestir 		= implode(",", $GelenSecimDegerleri);
$IDler					= Filtrele($IDleriBirlestir);

$Sil 		= $VeritabaniBaglantisi->prepare("DELETE FROM kisiler WHERE id IN ($IDler)");
$Sil->execute();

$VeritabaniBaglantisi 	= null;
header("location:index.php");
exit();
?>