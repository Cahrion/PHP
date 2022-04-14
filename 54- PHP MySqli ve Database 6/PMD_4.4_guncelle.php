<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	<?php
	/*
		UPDATE 	= MySQL suncusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırdaki sütuna / sütunlara ait veriyi / verileri güncelemek için kullanılır.
	*/
	
	$GelenIDDegeri 	= $_GET["id"];
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_errno());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler WHERE id=$GelenIDDegeri"); 
		if($Sorgu){
			$KayitSayisi 	= mysqli_num_rows($Sorgu);
			if($KayitSayisi > 0){
				$Kayit = mysqli_fetch_assoc($Sorgu);
			}else{
				echo "Kayıt Bulunamadı.";
			}
		}else{
			echo "Sorgu Hatası";
		}
	?>
	<form action="PMD_4.5_sonuc.php?id=<?php echo $GelenIDDegeri; ?>" method="post">
		Adınız Soyadınız: <input type="text" name="adisoyadi" 	value="<?php echo $Kayit["adisoyadi"]; ?>"> <br>
		E-Mail Adresiniz: <input type="text" name="emailadresi" value="<?php echo $Kayit["emailadresi"]; ?>"> <br>
		Şifreniz: <input type="password" name="sifre"			value="<?php echo $Kayit["sifre"]; ?>"> <br>
		Telefon Numaranız: <input type="text" name="telefon"	value="<?php echo $Kayit["telefon"]; ?>"> <br>
		Yaşınız: <select name="yas">
			<option value="19" <?php if($Kayit["yas"] == 19){echo "selected='selected'";}?>>19</option>
			<option value="20" <?php if($Kayit["yas"] == 20){echo "selected='selected'";}?>>20</option>
			<option value="21" <?php if($Kayit["yas"] == 21){echo "selected='selected'";}?>>21</option>
			<option value="22" <?php if($Kayit["yas"] == 22){echo "selected='selected'";}?>>22</option>
			<option value="23" <?php if($Kayit["yas"] == 23){echo "selected='selected'";}?>>23</option>
			<option value="24" <?php if($Kayit["yas"] == 24){echo "selected='selected'";}?>>24</option>
			<option value="25" <?php if($Kayit["yas"] == 25){echo "selected='selected'";}?>>25</option>
			<option value="26" <?php if($Kayit["yas"] == 26){echo "selected='selected'";}?>>26</option>
			<option value="27" <?php if($Kayit["yas"] == 27){echo "selected='selected'";}?>>27</option>
			<option value="28" <?php if($Kayit["yas"] == 28){echo "selected='selected'";}?>>28</option>
			<option value="29" <?php if($Kayit["yas"] == 29){echo "selected='selected'";}?>>29</option>
			<option value="30" <?php if($Kayit["yas"] == 30){echo "selected='selected'";}?>>30</option>
			<option value="31" <?php if($Kayit["yas"] == 31){echo "selected='selected'";}?>>31</option>
			<option value="32" <?php if($Kayit["yas"] == 32){echo "selected='selected'";}?>>32</option>
			<option value="33" <?php if($Kayit["yas"] == 33){echo "selected='selected'";}?>>33</option>
			<option value="34" <?php if($Kayit["yas"] == 34){echo "selected='selected'";}?>>34</option>
			<option value="35" <?php if($Kayit["yas"] == 35){echo "selected='selected'";}?>>35</option>
			<option value="36" <?php if($Kayit["yas"] == 36){echo "selected='selected'";}?>>36</option>
			<option value="37" <?php if($Kayit["yas"] == 37){echo "selected='selected'";}?>>37</option>
			<option value="38" <?php if($Kayit["yas"] == 38){echo "selected='selected'";}?>>38</option>
			<option value="39" <?php if($Kayit["yas"] == 39){echo "selected='selected'";}?>>39</option>
			<option value="40" <?php if($Kayit["yas"] == 40){echo "selected='selected'";}?>>40</option>
		</select><br>
		Cinsiyetiniz: <input type="radio" name="cinsiyet" value="Erkek" <?php if($Kayit["cinsiyet"] == 'Erkek'){ echo "checked='checked'";}?>>Erkek <input type="radio" name="cinsiyet" value="Kadın" <?php if($Kayit["cinsiyet"] == 'Kadın'){ echo "checked='checked'";}?>>Kadın <br>
		Yaşadığınız Şehir: <input type="text" name="sehir"		value="<?php echo $Kayit["sehir"]; ?>"><br>
		<input type="submit" value="Kaydet">
	</form>
	<br><br><br><br><br>
	
	
	
	
	<?php
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>