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

	$AnketSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM anket LIMIT 1");
	$AnketSorgusu->execute();
	$KayitSayisi	= $AnketSorgusu->rowCount();
	$Kayit 			= $AnketSorgusu->fetch(PDO::FETCH_ASSOC);

	if($KayitSayisi>0){

	?>
	<form action="oyver.php" method="post">
		<table width="300" align="center" border="0" cellpadding="0" cellspacing="0">
			<tr height="30">
				<td colspan='2'><?php echo $Kayit["soru"]; ?></td>
			</tr>		
			<tr height="30">
				<td width="25"><input type="radio" name="cevap" value="1"></td>
				<td width="275"><?php echo $Kayit["cevapbir"]; ?></td>
			</tr>		
			<tr height="30">
				<td width="25"><input type="radio" name="cevap" value="2"></td>
				<td width="275"><?php echo $Kayit["cevapiki"]; ?></td>
			</tr>		
			<tr height="30">
				<td width="25"><input type="radio" name="cevap" value="3"></td>
				<td width="275"><?php echo $Kayit["cevapuc"]; ?></td>
			</tr>	
			<tr height="30">
				<td colspan='2'><input type="submit" value="Oyumu Gönder"></td>
			</tr>
			<tr height="30">
				<td colspan='2' align="right"><a href="sonuclar.php" style="text-decoration: none;color: blue;">Anket Sonuçlarını Göster</a></td>
			</tr>	
		</table>	
	</form>
	<?php
	}else{
		echo "Şuanlık Bir anket bulunmamakta.";
	}
	?>
	
</body>
</html>
<?php
$VeritabaniBaglantisi 	= null;
?>