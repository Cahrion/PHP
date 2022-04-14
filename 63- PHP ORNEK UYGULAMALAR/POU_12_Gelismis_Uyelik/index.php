<?php
require_once("baglan.php")
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
	<table width="1000" height="600" align="center" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="5" height="100" bgcolor="#CCCCCC">ÜST ALAN (HEADER ALANI) (LOGO- BANNER MENULER Vs.)</td>
		</tr>			
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>	
		<tr>
			<td width="200" height="400" valign="top" bgcolor="#CCCCCC"><a href="index.php" style="text-decoration: none;color:black;">Ana Sayfa</a</td>
			<td width="10" height="400">&nbsp;</td>
			<td width="480" height="400" valign="top" bgcolor="#CCCCCC">IÇERİK ALANI (MAIN ALANI))</td>
			<td width="10" height="400">&nbsp;</td>
			<td width="300" height="400" valign="top">
				
				<?php if(isset($_SESSION["Kullanici"])){ ?>
				<form action="uyecikis.php" method="post">
					<table width="300" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td colspan="3" height="30" style="background-color: #990000;color:#FFFFFF;">&nbsp;Üyelik Alanı</td>
						</tr>	
						<tr>
							<td height="30" align="left">Merhaba <?php echo $UyeninAdiSoyadi; ?>&nbsp;</td>
						</tr>
						<tr>
							<td height="30" align="right"><a href="cikis.php" style="text-decoration: none;color:red;">Çıkış Yap</a>&nbsp;</td>
						</tr>
					</table>
				</form>
				<?php }else{ ?>
				<form action="uyegiris.php" method="post">
					<table width="300" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td colspan="3" height="30" style="background-color: #990000;color:#FFFFFF;">&nbsp;Üyelik Alanı (Yeni Üye Ol)</td>
						</tr>	
						<tr>
							<td height="30" width="100">&nbsp;Kullanıcı Adı</td>
							<td height="30" width="10">:</td>
							<td height="30" width="190"><input type="text" name="kullaniciadi" style="width: 100%;"></td>
						</tr>
						<tr>
							<td height="30" width="100">&nbsp;Şifre</td>
							<td height="30" width="10">:</td>
							<td height="30" width="190"><input type="password" name="sifre" style="width: 100%;"></td>
						</tr>
						<tr>
							<td height="30" width="100">&nbsp;</td>
							<td height="30" width="10">&nbsp;</td>
							<td height="30" width="190" align="right"><input type="submit" value="Giriş Yap"></td>
						</tr>
						<tr>
							<td height="30" width="10" colspan="3" align="right"><a href="uyeol.php" style="text-decoration: none;color:blue;">Yeni Üye Ol</a>&nbsp;</td>
						</tr>
					</table>
				</form>
				<?php } ?>
			
			</td>
		</tr>			
		<tr>
			<td colspan="5" height="20">&nbsp;</td>
		</tr>	
		<tr>
			<td colspan="5" height="100" bgcolor="#CCCCCC">ALT ALAN (FOOTER ALANI) (LOGO- BANNER MENULER Vs.)</td>
		</tr>
	</table>
</body>
</html>
<?php
	ob_flush();
	$VeritabaniBaglantisi 	= null;
?>