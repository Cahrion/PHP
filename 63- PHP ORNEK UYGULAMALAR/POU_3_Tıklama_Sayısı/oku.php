<?php
require_once("baglan.php");
$GelenID 		= Filtre($_GET["id"]);

$HitGuncelle 	= $VeritabaniBaglantisi->prepare("UPDATE makaleler SET gosterimsayisi=gosterimsayisi + 1 WHERE id = ?");
$HitGuncelle->execute([$GelenID]);

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
	<table width="1000" border="0" cellpadding="0" cellspacing="0" align="center">
		<tr height="30">
			<td align="left"><b>Görüntüleme ve Hit Uygulaması</b></td>
			<td align="right"><a href="index.php" style="text-decoration: none;color=black;">AnaSayfa</a></td>
		</tr>
	<?php
		$Sorgu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM makaleler WHERE id= ?");
		$Sorgu->execute([$GelenID]);
		$KayitSayisi 	= $Sorgu->rowCount();
		$Kayit 	 		= $Sorgu->fetch(PDO::FETCH_ASSOC);

	if($KayitSayisi>0){
	?>		
		<tr height="30">
			<td colspan="2" align="left"><h3><?php echo $Kayit["makalebasligi"]; ?></h3></td>
		</tr>	
		<tr height="30">
			<td colspan="2" align="left"><?php echo $Kayit["makaleicerigi"]; ?></td>
		</tr>	
		<tr height="30">
			<td colspan="2" align="center">Bu makale <?php echo $Kayit["gosterimsayisi"]; ?> defa görüntülendi.</td>
		</tr>	
	</table>	
	<?php		
		}else{
			header("Location: index.php");
		}
	?>
</body>
</html>
<?php
$VeritabaniBaglantisi 	= null;
?>