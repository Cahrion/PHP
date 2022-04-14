<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr height="100" bgcolor="#FF9900">
		<td align="left"><h2 style="color: white;">&nbsp;SIK SORULAN SORULAR</h2></td>
	</tr>
	<tr height="50">
		<td align="left" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;Aklınıza takılabileceğini düşündüğümüz soruların cevaplarını bu sayfada cevapladık. Fakat farklı bir sorunuz varsa lütfen iletişim alanından bizlere iletiniz.</td>
	</tr>
	<tr>
		<td><?php
		$SorularSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM sorular");
		$SorularSorgusu->execute();
		$SorularSayisi			=	$SorularSorgusu->rowCount();
		$SorularKayitlari		=	$SorularSorgusu->fetchAll(PDO::FETCH_ASSOC);

		foreach($SorularKayitlari as $Kayitlar){
		?>
			<div>
				<div class="SorununBaslikAlani" onClick="IcerikGoster(<?php echo $Kayitlar["id"]; ?>)"><?php echo $Kayitlar["soru"]; ?></div>
				<div id="<?php echo $Kayitlar["id"]; ?>" class="SorununCevapAlani" style="display: none;"><?php echo $Kayitlar["cevap"]; ?></div>
			</div>
		<?php
		}
		?>
		</td>
	</tr>
</table>
