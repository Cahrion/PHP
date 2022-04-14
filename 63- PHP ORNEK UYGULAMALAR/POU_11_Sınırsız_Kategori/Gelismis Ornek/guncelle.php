<?php
require_once("baglan.php");
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
	$GelenID = Filtrele($_GET["id"]);
	$Sorgu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE id = ? LIMIT 1");
	$Sorgu->execute([$GelenID]);
	$KayitSayi	= $Sorgu->rowCount();
	$Kaydi 		= $Sorgu->fetch(PDO::FETCH_ASSOC);
	
	function AcilirListeIcinMenuYaz($MenuUstIdDegeri=0, $BoslukDegeri=0){
		global $GelenID;
		global $VeritabaniBaglantisi;
		global $Kaydi;
		
		$Sorgu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE ustid = ?");
		$Sorgu->execute([$MenuUstIdDegeri]);
		$KayitSayisi	= $Sorgu->rowCount();
		$Kayitlar 		= $Sorgu->fetchAll(PDO::FETCH_ASSOC);
		if($KayitSayisi > 0){
			foreach($Kayitlar as $Kayit){
				$KayitVerisi 	= 
				$MenuId 		= $Kayit["id"];
				$MenuUstId 		= $Kayit["ustid"];
				$MenuMenuAdi	= $Kayit["menuadi"];
				
				if($Kaydi["ustid"] == $Kayit["id"]){
					echo "<option value='" . $MenuId . "' selected='selected'>" . str_repeat("&nbsp;", $BoslukDegeri) . $MenuMenuAdi . "</option>";
					AcilirListeIcinMenuYaz($MenuId, $BoslukDegeri+5);
				}elseif($Kaydi["id"] != $Kayit["id"]){
					echo "<option value='" . $MenuId . "'>" . str_repeat("&nbsp;", $BoslukDegeri) . $MenuMenuAdi . "</option>";
					AcilirListeIcinMenuYaz($MenuId, $BoslukDegeri+5);
				}
				
			}
		}
	}
	
	
	?>
	Menü Güncelleme Formu <br><br>
	<form action="guncellesonuc.php?id=<?php echo $GelenID?>" method="post">
		Üst Menü; <select name="UstMenuSecimi">
			<option value="0">Ana Menü</option>
			<?php AcilirListeIcinMenuYaz(); ?>
		</select><br>
		Menü Adı: <input type="text" name="MenuAdi" value='<?php echo $Kaydi["menuadi"]?>'><br>
		<input type="submit" value="Menüyü Güncelle">
	
	</form>
	<br><br><br><br>
	<?php
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>