<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="500" valign="top">
			<form action="index.php?SK=38" method="post">
				<table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr height="40">
						<td colspan="2" style="color:#FF9900"><h3>Şifremi Unuttum</h3></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Aşağıdan hesabına yeni şifre oluşturma talebi başlatabilirsin.</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">E-Mail Adresi</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">Telefon Numarası</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="text" name="TelefonNumarasi" class="InputAlanlari"></td>
					</tr>
					<tr height="40">
						<td colspan="2" align="center"><input type="submit" value="Yeni Şifre Oluşturma Maili Gönder" class="YesilButon"></td>
					</tr>
				</table>
			</form>
		</td>
		
		<td width="20">&nbsp;</td>
		
		<td width="545" valign="top"><table width="545" align="center" border="0" cellpadding="0" cellspacing="0">
			<tr height="40">
				<td colspan="2" style="color:#FF9900"><h3>Yeni Şifre Oluşturma</h3></td>
			</tr>
			<tr height="30">
				<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Çalışma ve İşleyiş Açıklaması.</td>
			</tr>
			<?php
				$SifremiUnuttumBilgiSorgusu 		= $VeritabaniBaglantisi->prepare("SELECT * FROM sifremiunuttumbilgisi");
				$SifremiUnuttumBilgiSorgusu->execute();
				$SifremiUnuttumBilgiSayisi 			= $SifremiUnuttumBilgiSorgusu->rowCount();
				$SifremiUnuttumBilgi				= $SifremiUnuttumBilgiSorgusu->fetchAll(PDO::FETCH_ASSOC);
				foreach($SifremiUnuttumBilgi as $SifremiUnuttumBilgiKaydi){
					
			?>	
				<tr>
					<td colspan="2" style='font-size: 5px'>&nbsp;</td>
				</tr>
				<tr height="30">
					<td align='left' width='30'><img src="Resimler/<?php echo DonusumleriGeriDondur($SifremiUnuttumBilgiKaydi["logo"]); ?>" border="0" style='margin-top: 3px'></td>
					<td align='left'><b><?php echo DonusumleriGeriDondur($SifremiUnuttumBilgiKaydi["adi"]); ?></b></td>
				</tr>	
				<tr>
					<td colspan="2" align="left"><?php echo DonusumleriGeriDondur($SifremiUnuttumBilgiKaydi["icerik"]); ?></td>
				</tr>
			<?php
					
				}
			?>
		</table></td>
	</tr>
</table>