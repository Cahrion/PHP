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
	<?php
	$ReklamSorgusu		= $VeritabaniBaglantisi->prepare("SELECT * FROM bannerlar ORDER BY gosterimsayisi ASC LIMIT 1");
	$ReklamSorgusu->execute();
	$ReklamSayisi		= $ReklamSorgusu->rowCount();
	$ReklamKaydi		= $ReklamSorgusu->fetch(PDO::FETCH_ASSOC);
	?>
	<table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr height="150">
			<td><img src="dosyalar/<?php echo $ReklamKaydi["bannerdosyasi"]; ?>" border="0"></td>
		</tr>
	</table>
	
	
	
</body>
</html>
<?php
	$ReklamGuncelle 	= $VeritabaniBaglantisi->prepare("UPDATE bannerlar SET gosterimsayisi=gosterimsayisi+1 WHERE id = ? ");
	$ReklamGuncelle->execute([$ReklamKaydi["id"]]);

$VeritabaniBaglantisi 	= null;
?>