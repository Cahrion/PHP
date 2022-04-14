<?php
try{
	$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	die("Bağlantı Hatası: " . $Hata->getMessage());
}
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
	<table width="1000" align="center" border="1" cellpadding="0" cellspacing="0">
		<tr height="30" bgcolor="#000000">
			<td align="left" style="color:white">&nbsp;Ürün Adı</td>
			<td align="right" style="color:white">Ürün Fiyatı&nbsp;</td>
		</tr>
		
	<?php
		$Sorgu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM urunler");
		$Sorgu->execute();
		$KayitSayisi 	= $Sorgu->rowCount();
		$Kayitlar 		= $Sorgu->fetchAll(PDO::FETCH_ASSOC);
		
		$BirinciRenk	= "#dfdfdf";
		$IkinciRenk		= "#FFFFFF";
		$RenkIcinSayi 	= 0;
		
		foreach($Kayitlar as $Kayit){
			if(($RenkIcinSayi % 2) == 0){
				$ArkaPlanRengi 	= $BirinciRenk;
			}else{
				$ArkaPlanRengi 	= $IkinciRenk;
			}
			$RenkIcinSayi++;
		
		?>	
		
		
		<tr height="30" bgcolor="<?php echo $ArkaPlanRengi ?>" onMouseOver="this.bgColor='#c2cedb'" onMouseOut="this.bgColor='<?php echo $ArkaPlanRengi ?>'" style="cursor: pointer">
			<td align="left">&nbsp; <?php echo $Kayit["urunadi"]; ?></td>
			<td align="right"><?php echo $Kayit["urunfiyati"]; ?> &nbsp;</td>
		</tr>
		<?php
		}
		?>
	</table>	

	
</body>
</html>
<?php
$VeritabaniBaglantisi 	= null;
?>