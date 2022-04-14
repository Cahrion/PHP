<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">	
	<tr width="1065">
		<td width="500" valign="top">
			<form action="index.php?SK=10" method="post">
				<table align="center" width='500' border="0" cellpadding="0" cellspacing="0">	
					<tr height='40'>
						<td style='color: #FF9900'><h3>Havale Bildirim Formu</h3></td>
					</tr>			
					<tr height="30">
						<td align='top' style="border-bottom: 1px solid #CCC;">Tamamlanmış olan ödeme işleminizi aşağıdaki formdan iletiniz.</td>
					</tr>	

					<tr height="30">
						<td valign='bottom' align='left'>İsim Soyisim (*)</td>
					</tr>	
					<tr height="30">
						<td valign="top" align='left'><input type="text" name="IsimSoyisim" class='InputAlanlari'></td>
					</tr>	
					<tr height="30">
						<td valign='bottom' align='left'>E-Mail Adresi (*)</td>
					</tr>	
					<tr height="30">
						<td valign="top" align='left'><input type="text" name="EmailAdresi" class='InputAlanlari'></td>
					</tr>	
					<tr height="30">
						<td valign='bottom' align='left'>Telefon Numarası (*)</td>
					</tr>	
					<tr height="30">
						<td valign="top" align='left'><input type="text" name="TelefonNumarasi" maxlength="11" class='InputAlanlari'></td>
					</tr>
					<tr height="30">
						<td valign='bottom' align='left'>Ödeme Yapılan Banka (*)</td>
					</tr>	
					<tr height="30">
						<td valign="top" align='left'>
							<select name="BankaSecimi" class="SelectAlanlari">
							<?php
								$BankalarSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM bankahesaplarimiz ORDER BY BankaAdi ASC");
								$BankalarSorgusu->execute();
								$BankaSayisi 		= $BankalarSorgusu->rowCount();
								$Bankalar			= $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
								foreach($Bankalar as $BankaKaydi){
									echo "<option value='" . DonusumleriGeriDondur($BankaKaydi["id"]) . "'>" . DonusumleriGeriDondur($BankaKaydi["BankaAdi"]) . "</option>";
								}
							?>
							</select>
						</td>
					</tr>		
					<tr height="30">	
						<td valign='bottom' align='left'>Açıklama</td>
					</tr>	
					<tr height="30">
						<td valign="top" align='left'><textarea name="Aciklama" class='TextAreaAlanlari'></textarea></td>
					</tr>
					<tr height="40">
						<td align='center' ><input type="submit" value='Bildirimi Gönder' class='YesilButon'></td>
					</tr>
				</table>
			</form>
		</td>
		<td width="20">&nbsp;</td>
		<td width="545" valign="top">
			<table align="center" width='545' border="0" cellpadding="0" cellspacing="0">	
				<tr height='40' style='color: #FF9900'>
					<td colspan='2'><h3>İşleyiş</h3></td>
				</tr>			
				<tr height="30">
					<td align='top' style="border-bottom: 1px solid #CCC;" colspan='2'>
						Havale / EFT işlemlerinin Kontrolü
					</td>
				</tr>		
				<?php
				$HavaleBilgiSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM havalebilgisi");
				$HavaleBilgiSorgusu->execute();
				$HavaleBilgiSayisi 			= $HavaleBilgiSorgusu->rowCount();
				$HavaleBilgi				= $HavaleBilgiSorgusu->fetchAll(PDO::FETCH_ASSOC);
				foreach($HavaleBilgi as $HavaleBilgiKaydi){
					
				?>	
				<tr>
					<td colspan="2" style='font-size: 5px'>&nbsp;</td>
				</tr>
				<tr height="30">
					<td align='left' width='30'><img src="Resimler/<?php echo DonusumleriGeriDondur($HavaleBilgiKaydi["logo"]); ?>" border="0" style='margin-top: 3px'></td>
					<td align='left'><b><?php echo DonusumleriGeriDondur($HavaleBilgiKaydi["adi"]); ?></b></td>
				</tr>	
				<tr>
					<td colspan="2" align="left"><?php echo DonusumleriGeriDondur($HavaleBilgiKaydi["icerik"]); ?></td>
				</tr>
				<?php
					
				}
				?>
			</table>
		</td>
	</tr>	
</table>