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

<style>
	a{
		text-decoration: none;
		color: black;
	}
	.sil{
		color: red;
	}
	.guncelle{
		color: green;
	}
</style>	
	
</head>

<body>
	<?php
	
	function AcilirListeIcinMenuYaz($MenuUstIdDegeri=0, $BoslukDegeri=0){
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
				
				echo "<option value='" . $MenuId . "'>" . str_repeat("&nbsp;", $BoslukDegeri) . $MenuMenuAdi . "</option>";
				
				AcilirListeIcinMenuYaz($MenuId, $BoslukDegeri+5);
			}
		}
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
				echo $MenuMenuAdi . " <a href='guncelle.php?id=" . $MenuId . "' class='guncelle'>[Güncelle]</a> <a href='sil.php?id=" . $MenuId . "' class='sil'>[Sil]</a><br> ";
				
				MenuYaz($MenuId, $BoslukDegeri+10);
			}
		}
	}
	
	// Yeni Menü Ekleme
	?>
	Menü Ekleme Formu <br><br>
	<form action="ekle.php" method="post">
		Üst Menü; <select name="UstMenuSecimi">
			<option value="0">Ana Menü Yap</option>
			<?php AcilirListeIcinMenuYaz(); ?>
		</select><br>
		Menü Adı: <input type="text" name="MenuAdi"><br>
		<input type="submit" value="Menü Ekle">
	
	</form>
	<br><br><br><br>
	<?php
	MenuYaz(0);
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>