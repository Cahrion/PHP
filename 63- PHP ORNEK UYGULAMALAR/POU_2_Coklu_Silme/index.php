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
<style>
</style>
<body>
	<form action="sonuc.php" method="post">
		<table width="500" align="center" cellpadding="0" cellspacing="0">
			<?php
				$Sorgu 		= $VeritabaniBaglantisi->prepare("SELECT * FROM kisiler");
				$Sorgu->execute();
				$Kayitlar	= $Sorgu->fetchAll(PDO::FETCH_ASSOC);

				if($Sorgu){
					$KayitSayisi 	= $Sorgu->rowCount();
					if($KayitSayisi = 0){
						echo "Kayıt Bulunamadı";
						die();
					}
				}else{
					echo "Sorgu Hatası";
					die();
				}
				foreach($Kayitlar as $KayitSatirlari){
			?>
				<tr>
					<td width="25" height="30" align="left"><input type="checkbox" name="secim[]" value="<?php echo $KayitSatirlari["id"]; ?>"></td>
					<td height="30" align="left"><?php echo $KayitSatirlari["adi"] . " " . $KayitSatirlari["soyadi"]; ?></td>
				</tr>
			<?php
				}
				$VeritabaniBaglantisi 			= null;
			?>
			<tr>
				<td height="50" colspan="2" align="left"><input type="submit" value="Seçli Olanları Sil"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>