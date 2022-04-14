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
	<br><br><br><br><br>

	<form action="aramasonuc.php" method="post">
		<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td><input type="text" name="kelime" style="width: 100%;height: 30px;margin-bottom: 20px;padding: 0 20px;"></td>
			</tr>		
			<tr>
				<td align="center"><input type="submit" value="Arama Yap" style="padding: 0 100px; height: 30px;"></td>
			</tr>		
			<tr>
				<td>&nbsp;</td>
			</tr>	
			<tr>
				<td align="left">
					<?php
						if(isset($_POST["kelime"])){
							$GelenKelime 	= Filtre($_POST["kelime"]);

							$Sorgu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM esyalar WHERE adi LIKE '%$GelenKelime%'");
							$Sorgu->execute();
							$KayitSayisi 	= $Sorgu->rowCount();
							$Kayitlar 		= $Sorgu->fetchAll(PDO::FETCH_ASSOC);

							if($KayitSayisi>0){
								echo "Bulunan Kayıtlar<br>";
								foreach($Kayitlar as $Kayit){
									echo $Kayit["adi"] . "<br>";
								}
							}else{
								echo "Aradığınız içerikte bir kayıt bulunamadı.";
							}
						}
					?>
				</td>
			</tr>
		</table>	
	</form>
	
	
	
	
</body>
</html>
<?php
$VeritabaniBaglantisi 	= null;
?>