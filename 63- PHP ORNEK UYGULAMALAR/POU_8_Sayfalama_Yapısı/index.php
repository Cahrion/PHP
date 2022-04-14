<?php
try{
	$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	die("Bağlantı Hatası: " . $Hata->getMessage());
}

if(isset($_REQUEST["Sayfalama"])){
	$GelenSayfalama 	= $_REQUEST["Sayfalama"];
}else{
	$GelenSayfalama 	= 1;
}

$SayfalamaIcinSolVeSagButonSayisi	= 2;
$SayfaBasinaGosterilecekKayitSayisi = 2;
$ToplamKayitSayisiSorgusu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM urunler");
$ToplamKayitSayisiSorgusu->execute();
$ToplamKayitSayisi 					= $ToplamKayitSayisiSorgusu->rowCount();
$SayfalamayaBaslanacakKayitSayisi 	= ($GelenSayfalama*$SayfaBasinaGosterilecekKayitSayisi)-$SayfaBasinaGosterilecekKayitSayisi;
$BulunanSayfaSayisi					= ceil($ToplamKayitSayisi/$SayfaBasinaGosterilecekKayitSayisi);


?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
	
<style>
	.SayfalamaAlaniKapsayicisi{
		display: block;
		width: 100%;
		height: auto;
		margin: 0;
		padding: 10px 0 10px 0;
		border: 0;
		outline: 0;
		text-align: center;
		text-decoration: none;
	}
	.SayfalamaAlaniIciMetinAlaniKapsayicisi{
		display: block;
		width: 100%;
		height: auto;
		margin: 0;
		padding: 5px 0 5px 0;
		border: 0;
		outline: 0;
		text-align: center;
		text-decoration: none;
	}
	.SayfalamaAlaniNumaralandirmaAlaniKapsayicisi{
		display: block;
		width: 100%;
		height: auto;
		margin: 0;
		padding: 5px 0 5px 0;
		border: 0;
		outline: 0;
		text-align: center;
		text-decoration: none;
	}
	.Pasif{
		display: inline-block;
		width: auto;
		height: 20px;
		margin: 0px 0.5px;
		padding: 0;
		padding: 5px 7.5px;
		background: #FFFFFF;
		border: 0;
		border: 1px solid #DADADA;
		outline: 0;
		color: #646464;
		font-size: 14px;
		font-style: normal;
		font-variant: normal;
		font-weight: normal;
		line-height: 20px;
		text-align: center;
		text-decoration: none;
	}
	.Pasif a:link, a:visited, a:active{
		text-decoration: none;
		color: #646464;
	}
	.Pasif a:hover{
		color: black;
	}
	.Aktif{
		display: inline-block;
		width: auto;
		height: 20px;
		margin: 0px 0.5px;
		padding: 0;
		padding: 5px 7.5px;
		background: #F6F6F6;
		border: 0;
		border: 1px solid #DADADA;
		outline: 0;
		color: #FF0000;
		font-size: 14px;
		font-style: normal;
		font-variant: normal;
		font-weight: bold;
		line-height: 20px;
		text-align: center;
		text-decoration: none;
	}	
</style>
	
</head>
<body>
	<table align="center" width="500" border="0" cellpadding="0" cellspacing="0">	
	<?php
	$Sorgu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM urunler ORDER BY id ASC LIMIT $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi");
	$Sorgu->execute();
	
	$KayitSayisi 	= $Sorgu->rowCount();
	$Kayitlar 		= $Sorgu->fetchAll(PDO::FETCH_ASSOC);
	
		
		
	foreach($Kayitlar as $Kayit){
		if(strlen($Kayit["id"]) == 1){
			$Kayit["id"] = "0" . $Kayit["id"];
		}
		echo "<tr height='30'>";
		echo "<td width='25' align='left'>" . $Kayit["id"] . "</td>";
		echo "<td width='375' align='left'>" . $Kayit["urunadi"] . "</td>";
		echo "<td width='100' align='right'>" . $Kayit["urunfiyati"] . " " . $Kayit["parabirimi"] . "</td>";
		echo "</tr>";
	}
	
	?>
	</table>
	
	<div class="SayfalamaAlaniKapsayicisi">
		<div class="SayfalamaAlaniIciMetinAlaniKapsayicisi">
			Toplam <?php echo $BulunanSayfaSayisi; ?> sayfada, <?php echo $ToplamKayitSayisi; ?> adet kayıt bulunmaktadır.
		</div>
		<div class="SayfalamaAlaniNumaralandirmaAlaniKapsayicisi">
			<?php
				if($GelenSayfalama > 1){
					echo "<span class='Pasif'><a href='index.php?Sayfalama=1'><<</a></span> ";
					$SayfalamaIcinSayfaDegeriniBirGeriAl 	= $GelenSayfalama - 1;
					echo "<span class='Pasif'><a href='index.php?Sayfalama=$SayfalamaIcinSayfaDegeriniBirGeriAl'><</a></span> ";
				}
			
				for($SayfaIndexDegeri=$GelenSayfalama-$SayfalamaIcinSolVeSagButonSayisi;$SayfaIndexDegeri <= $GelenSayfalama+$SayfalamaIcinSolVeSagButonSayisi;$SayfaIndexDegeri++){
					if(($SayfaIndexDegeri>0) and ($SayfaIndexDegeri<=$BulunanSayfaSayisi)){
						if($SayfaIndexDegeri == $GelenSayfalama){
							echo "<span class='Aktif'>" . $SayfaIndexDegeri . "</span> ";
						}else{
							echo "<span class='Pasif'><a href='index.php?Sayfalama=$SayfaIndexDegeri'>" . $SayfaIndexDegeri . "</a></span> ";
						}
					}
				}
			
			
				if($GelenSayfalama != $BulunanSayfaSayisi){
					$SayfalamaIcinSayfaDegeriniBirIleriAl 	= $GelenSayfalama + 1;
					echo "<span class='Pasif'><a href='index.php?Sayfalama=$SayfalamaIcinSayfaDegeriniBirIleriAl'>></a></span> ";
					
					echo "<span class='Pasif'><a href='index.php?Sayfalama=$BulunanSayfaSayisi'>>></a></span> ";
				}
			?>
		</div>
	</div>
</body>
</html>
<?php
$VeritabaniBaglantisi 	= null;
?>