<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="500" valign="top">
			<form action="index.php?SK=32" method="post">
				<table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr height="40">
						<td colspan="2" style="color:#FF9900"><h3>Kullanıcı Girişi</h3></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Aşağıdan Hesabına Giriş Yapabilirsin.</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">E-Mail Adresi (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td valign="bottom" align="left">Şifre (*)</td>
						<td valign="bottom" align="right" class="SifremiUnuttumFormu"><a href="index.php?SK=37">Şifremi Unuttum?</a></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="password" name="Sifre" class="InputAlanlari"></td>
					</tr>
					<tr height="40">
						<td colspan="2" align="center"><input type="submit" value="Giriş Yap" class="YesilButon"></td>
					</tr>
				</table>
			</form>
		</td>
		
		<td width="20">&nbsp;</td>
		
		<td width="545" valign="top"><table width="545" align="center" border="0" cellpadding="0" cellspacing="0">
			<tr height="40">
				<td colspan="2" style="color:#FF9900"><h3>Ürün Alırken Nelere Dikkat Etmelisiniz?</h3></td>
			</tr>
			<tr height="30">
				<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Sorusunun Cevabı: Birçok Etkeni Var.</td>
			</tr>
			<?php
				$UyeGirisBilgiSorgusu 		= $VeritabaniBaglantisi->prepare("SELECT * FROM uyegirisbilgisi");
				$UyeGirisBilgiSorgusu->execute();
				$UyeGirisBilgiSayisi 		= $UyeGirisBilgiSorgusu->rowCount();
				$UyeGirisBilgi				= $UyeGirisBilgiSorgusu->fetchAll(PDO::FETCH_ASSOC);
				foreach($UyeGirisBilgi as $UyeGirisBilgiKaydi){
					
			?>	
				<tr>
					<td colspan="2" style='font-size: 5px'>&nbsp;</td>
				</tr>
				<tr height="30">
					<td align='left' width='30'><img src="Resimler/<?php echo DonusumleriGeriDondur($UyeGirisBilgiKaydi["logo"]); ?>" border="0" style='margin-top: 3px'></td>
					<td align='left'><b><?php echo DonusumleriGeriDondur($UyeGirisBilgiKaydi["adi"]); ?></b></td>
				</tr>	
				<tr>
					<td colspan="2" align="left"><?php echo DonusumleriGeriDondur($UyeGirisBilgiKaydi["icerik"]); ?></td>
				</tr>
			<?php
					
				}
			?>
		</table></td>
	</tr>
</table>