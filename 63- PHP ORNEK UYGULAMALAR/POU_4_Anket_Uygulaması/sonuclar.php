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
	
	$ToplamOy 		= $Kayit["toplamoysayisi"];
	$AnketBirinci 	= $Kayit["oysayisibir"];
	$AnketIkinci 	= $Kayit["oysayisiiki"];
	$AnketUcuncu 	= $Kayit["oysayisiuc"];
	
	$BirinciOranYuzde 	= ($AnketBirinci/$ToplamOy)*100;
	$IkinciOranYuzde 	= ($AnketIkinci/$ToplamOy)*100;
	$UcuncuOranYuzde 	= ($AnketUcuncu/$ToplamOy)*100;
	
	$BirinciOran 	= number_format($BirinciOranYuzde, 2, ",", "");
	$IkinciOran 	= number_format($IkinciOranYuzde, 2, ",", ""); 
	$UcuncuOran 	= number_format($UcuncuOranYuzde, 2, ",", "");
	
	if($KayitSayisi>0){
	?>
	<table width="300" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr height="30">
			<td colspan='2'><?php echo $Kayit["soru"]; ?></td>
		</tr>		
		<tr height="30">
			<td width="75"><?php echo $BirinciOran ?></td>
			<td width="225"><?php echo $Kayit["cevapbir"]; ?></td>
		</tr>		
		<tr height="30">
			<td width="75"><?php echo $IkinciOran ?></td>
			<td width="225"><?php echo $Kayit["cevapiki"]; ?></td>
		</tr>		
		<tr height="30">
			<td width="75"><?php echo $UcuncuOran ?></td>
			<td width="225"><?php echo $Kayit["cevapuc"]; ?></td>
		</tr>	
		<tr height="30">
			<td colspan='2' align="right"><a href="index.php" style="text-decoration: none;color: blue;">Ana Sayfaya Dön</a></td>
		</tr>	
	</table>	
	<?php
	}else{
		header("Location index.php");
		exit();
	}
	?>
	
</body>
</html>
<?php
$VeritabaniBaglantisi 	= null;
?>