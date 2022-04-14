<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="500" valign="top">
			<form action="index.php?SK=23" method="post">
				<table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr height="40">
						<td colspan="2" style="color:#FF9900"><h3>Hesap Oluştur</h3></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Yenimisin? Aşağıdan Hesap Oluşturabilirsin.</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">E-Mail Adresi (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">Şifre (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="password" name="Sifre" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">Şifre Tekrar (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="password" name="SifreTekrar" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">İsim Soyisim (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">Telefon Numarası (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">Cinsiyet (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><select name="Cinsiyet" class="SelectAlanlari">
							<option value="">Lütfen Seçiniz</option>
							<option value="Erkek">Erkek</option>
							<option value="Kadın">Kadın</option>
						</select></td>
					</tr>
					<tr height="40">
						<td align="left" width="25"><input type="checkbox" name="SozlesmeOnay" value="1"></td>
						<td align="left" class="UyelikFormu" width="475"><a href="index.php?SK=2" target="_blank">Üyelik Sözleşmesi</a>'ni Okudum ve Onaylıyorum.</td>
					</tr>
					<tr height="40">
						<td colspan="2" align="center"><input type="submit" value="Üye Ol" class="YesilButon"></td>
					</tr>
				</table>
			</form>
		</td>
		
		<td width="20">&nbsp;</td>
		
		<td width="545" valign="top"><table width="545" align="center" border="0" cellpadding="0" cellspacing="0">
			<tr height="40">
				<td colspan="2" style="color:#FF9900"><h3>Neden mi Extra Eğitim?</h3></td>
			</tr>
			<tr height="30">
				<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Sorusunun Cevabı: Çünkü Birçok Nedeni Var!.</td>
			</tr>
			<?php
			$UyeOlBilgiSorgusu 		= $VeritabaniBaglantisi->prepare("SELECT * FROM uyeolbilgisi");
			$UyeOlBilgiSorgusu->execute();
			$UyeOlBilgiSayisi 		= $UyeOlBilgiSorgusu->rowCount();
			$UyeOlBilgi				= $UyeOlBilgiSorgusu->fetchAll(PDO::FETCH_ASSOC);
			foreach($UyeOlBilgi as $UyeOlBilgiKaydi){

			?>	
			<tr height="5">
				<td colspan="2" height="5" style='font-size: 5px'>&nbsp;</td>
			</tr>
			<tr height="30">
				<td align='left' width='30'><img src="Resimler/<?php echo DonusumleriGeriDondur($UyeOlBilgiKaydi["logo"]); ?>" border="0" style='margin-top: 3px'></td>
				<td align='left'><b><?php echo DonusumleriGeriDondur($UyeOlBilgiKaydi["adi"]); ?></b></td>
			</tr>	
			<tr>
				<td colspan="2" align="left"><?php echo DonusumleriGeriDondur($UyeOlBilgiKaydi["icerik"]); ?></td>
			</tr>
			<?php

			}
			?>
		</table></td>
	</tr>
</table>