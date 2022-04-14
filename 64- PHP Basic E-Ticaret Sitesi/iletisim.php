<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="500" valign="top">
			<form action="index.php?SK=17" method="post">
				<table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr height="40">
						<td style="color:#FF9900"><h3>İletişim</h3></td>
					</tr>
					<tr height="30">
						<td valign="top" style="border-bottom: 1px dashed #CCCCCC;">Bir Sorunuzmu Var? Bizlere Her Konuda Yazabilirsiniz.</td>
					</tr>
					<tr height="30">
						<td valign="bottom" align="left">İsim Soyisim (*)</td>
					</tr>
					<tr height="30">
						<td valign="top" align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td valign="bottom" align="left">E-Mail Adresi (*)</td>
					</tr>
					<tr height="30">
						<td valign="top" align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td valign="bottom" align="left">Telefon Numarası (*)</td>
					</tr>
					<tr height="30">
						<td valign="top" align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td valign="bottom" align="left">Mesaj (*)</td>
					</tr>
					<tr height="30">
						<td valign="top" align="left"><textarea name="Mesaj" class="TextAreaAlanlari"></textarea></td>
					</tr>
					<tr height="40">
						<td align="center"><input type="submit" value="Mesajımı Gönder" class="YesilButon"></td>
					</tr>
				</table>
			</form>
		</td>
		
		<td width="20">&nbsp;</td>
		
		<td width="545" valign="top"><table width="545" align="center" border="0" cellpadding="0" cellspacing="0">
			<tr height="40">
				<td colspan="2" style="color:#FF9900"><h3>Değerlendirmeye Alınmayan Mesajlar</h3></td>
			</tr>
			<tr height="30">
				<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Geçersiz Gördüğümüz Mesajlar Aşağıdaki Şekildedir.</td>
			</tr>
			<?php
				$IletisimBilgiSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM iletisimbilgisi");
				$IletisimBilgiSorgusu->execute();
				$IletisimBilgiSayisi 			= $IletisimBilgiSorgusu->rowCount();
				$IletisimBilgi				= $IletisimBilgiSorgusu->fetchAll(PDO::FETCH_ASSOC);
				foreach($IletisimBilgi as $IletisimBilgiKaydi){
					
				?>	
				<tr>
					<td colspan="2" style='font-size: 5px'>&nbsp;</td>
				</tr>
				<tr height="30">
					<td align='left' width='30'><img src="Resimler/<?php echo DonusumleriGeriDondur($IletisimBilgiKaydi["logo"]); ?>" border="0" style='margin-top: 3px'></td>
					<td align='left'><b><?php echo DonusumleriGeriDondur($IletisimBilgiKaydi["adi"]); ?></b></td>
				</tr>	
				<tr>
					<td colspan="2" align="left"><?php echo DonusumleriGeriDondur($IletisimBilgiKaydi["icerik"]); ?></td>
				</tr>
				<?php
					
				}
			?>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="left">Yukarıda belirtilmiş olan vb. gibi konularda gönderilecek olan tüm mesajlar, içeriği her ne olursa olsun değerlendirilmeye alınmayacak olup, herhangi bir şekilde cevap dönüşü yapılmayacaktır.</td>
			</tr>
		</table></td>
	</tr>
</table>