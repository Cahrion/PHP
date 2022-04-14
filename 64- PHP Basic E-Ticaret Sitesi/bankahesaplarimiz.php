<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">	
	<tr height='100' bgcolor='#FF9900'>
		<td align="left"><h2 style='color: white'>&nbsp;Banka Hesaplarımız</h2></td>
	</tr>	
	<tr height="50">
		<td align="left" style="border-bottom: 1px solid #CCC;">&nbsp;Ödemeleriniz için Çalışmakta olduğumuz tüm banka hesap bilgileri aşağıdadır.</td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<td>
			<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">	
				<tr>
					<?php
					$BankalarSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM bankahesaplarimiz");
					$BankalarSorgusu->execute();
					$BankalarSayisi		= $BankalarSorgusu->rowCount();
					$BankaKayitlari		= $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);

					$DonguSayisi		= 1;
					$SutunAdetSayisi 	= 3;
					foreach($BankaKayitlari as $BankaKaydi){
					?>
						<td width='348'>
							<table align="center" border='0' cellpadding="0" cellspacing="0" style="border:1px solid #CCC; margin-bottom: 10px;">	
								<tr height='40'>
									<td colspan='4' align='center' ><img src="Resimler/<?php echo DonusumleriGeriDondur($BankaKaydi["BankaLogosu"]); ?>" border="0"></td>
								</tr>
								<tr height='25'>
									<td width='5'>&nbsp;</td>
									<td width='80'><b>Banka Adı</b></td>
									<td width='20'><b>:</b></td>
									<td width='243'><?php echo DonusumleriGeriDondur($BankaKaydi["BankaAdi"]); ?></td>
								</tr>
								<tr height='25'>
									<td>&nbsp;</td>
									<td><b>Konum</b></td>
									<td><b>:</b></td>
									<td><?php echo DonusumleriGeriDondur($BankaKaydi["KonumSehir"]) . " / " . DonusumleriGeriDondur($BankaKaydi["KonumUlke"]); ?></td>
								</tr>
								<tr height='25'>
									<td>&nbsp;</td>
									<td><b>Şube</b></td>
									<td><b>:</b></td>
									<td><?php echo DonusumleriGeriDondur($BankaKaydi["SubeAdi"]) . " / " . DonusumleriGeriDondur($BankaKaydi["SubeKodu"]); ?></td>
								</tr>
								<tr height='25'>
									<td>&nbsp;</td>
									<td><b>Birim</b></td>
									<td><b>:</b></td>
									<td><?php echo DonusumleriGeriDondur($BankaKaydi["ParaBirimi"]); ?></td>
								</tr>
								<tr height='25'>
									<td>&nbsp;</td>
									<td><b>Hesap NO</b></td>
									<td><b>:</b></td>
									<td><?php echo DonusumleriGeriDondur($BankaKaydi["HesapNumarasi"]); ?></td>
								</tr>
								<tr height='25'>
									<td>&nbsp;</td>
									<td><b>IBAN No</b></td>
									<td><b>:</b></td>
									<td><?php echo IBANBicimlendir(DonusumleriGeriDondur($BankaKaydi["IbanNumarasi"])); ?></td>
								</tr>
							</table>
						</td>		
						<?php
							if(($DonguSayisi % $SutunAdetSayisi) == 0){
								echo "</tr><tr>";
							}else{
						?>		
									<td width="10">&nbsp;</td>
					<?php		
							}
						$DonguSayisi++;
					}
					?>
				
				
				
				</tr>
			</table>
		</td>
	</tr>	
</table>