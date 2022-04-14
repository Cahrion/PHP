<?php

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
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	}catch(PDOException $HATA){
		die("Bağlantı Hatası: " . $HATA);
	}
	function MenuYaz($MenuUstIdDegeri=0, $BoslukDegeri=0){
		global $VeritabaniBaglantisi;
		$Sorgu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE ustid = ?");
		$Sorgu->execute([$MenuUstIdDegeri]);
		$KayitSayisi	= $Sorgu->rowCount();
		$Kayitlar 		= $Sorgu->fetchAll(PDO::FETCH_ASSOC);
		if($KayitSayisi > 0){
			foreach($Kayitlar as $Kayit){
				$MenuId 		= $Kayit["id"];
				$MenuUstId 		= $Kayit["ustid"];
				$MenuMenuAdi	= $Kayit["menuadi"];
				
				echo str_repeat("&nbsp;", $BoslukDegeri);
				echo $MenuId . " | ";
				echo $MenuUstId . " | ";
				echo $MenuMenuAdi . " <br> ";
				
				
				MenuYaz($MenuId, $BoslukDegeri+5);
			}
		}
	}
	MenuYaz(0);
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>