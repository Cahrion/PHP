<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
<?php
$clientId		=	"xxxxxx";	//	Bankadan Sanal Pos Onaylanınca Bankanın Verdiği İşyeri Numarası
$amount			=	"xxxxxx";	//	Sepet Ücreti yada İşlem Tutarı yada Karttan Çekilecek Tutar
$oid			=	"xxxxxx";	//	Sipariş Numarası (Tekrarlanmayan Bir Değer) (Örneğin Sepet Tablosundaki IDyi Kullanabilirsiniz) (Her İşlemde Değişmeli ve Asla Tekrarlanmamalı)
$okUrl			=	"http://www.siteadiniz.com/odemetamam.php";	//	Ödeme İşlemi Başarıyla Gerçekleşir ise Dönülecek Sayfa
$failUrl		=	"http://www.siteadiniz.com/odemehata.php";	//	Ödeme İşlemi Red Olur ise Dönülecek Sayfa
$rnd			=	@microtime();
$storekey		=	"xxxxxx";	// Sanal Pos Onaylandığında Bankanın Size Verdiği Sanal Pos Ekranına Girerek Oluşturulacak Olan İş Yeri Anahtarı
$storetype		=	"3d";	//	3D Modeli
$hashstr		=	$clientId.$oid.$amount.$okUrl.$failUrl.$rnd.$storekey;	// Bankanın Kendi Ayarladığı Hash Parametresi
$hash			=	@base64_encode(@pack('H*',@sha1($hashstr)));	// Bankanın Kendi Ayarladığı Hash Şifreleme Parametresi
$description	=	"xxxxxx";	//	Extra Bir Açıklama Yazmak İsterseniz Çekim İle İlgili Buraya Yazıyoruz
$xid			=	"";		//	20 bytelik, 28 Karakterli base64 Olarak Boş Bırılınca Sistem Tarafindan Ototmatik Üretilir. Lütfen Boş Bırakın
$lang			=	"";		//	Çekim Gösterim Dili Default Türkçedir. Ayarlamak İsterseniz Türkçe (tr), İngilizce (en) Girilmelidir. Boş Bırakılırsa (tr) Kabu Edilmiş Olur.
$email			=	"xxxxxx";	//	İsterseniz Çekimi Yapan Kullanıcınızın E-Mail Adresini Gönderebilirsiniz
$userid			=	"xxxxxx";	//	İsterseniz Çekimi Yapan Kullanıcınızın Idsini Gönderebilirsiniz
?>
<center>
<form method="post" action="https://<sunucu_adresi>/<3dgate_path>"> <!-- Bu Adres Banka veya EST Firması Tarafından Verilir -->
	<input type="hidden" name="clientid" value="<?=$clientId?>" />
	<input type="hidden" name="amount" value="<?=$amount?>" />
	<input type="hidden" name="oid" value="<?=$oid?>" />
	<input type="hidden" name="okUrl" value="<?=$okUrl?>" />
	<input type="hidden" name="failUrl" value="<?=$failUrl?>" />
	<input type="hidden" name="rnd" value="<?=$rnd?>" />
	<input type="hidden" name="hash" value="<?=$hash?>" />
	<input type="hidden" name="storetype" value="3d" />	
	<input type="hidden" name="lang" value="tr" />
    <table width="350">
        <tr>
            <td width="140">Kredi Kart Numarası</td>
            <td width="198"><input type="text" name="pan" size="20" />
        </tr>
        <tr>
            <td>Son Kullanma Tarihi</td>
            <td><select name="Ecom_Payment_Card_ExpDate_Month">
            <option value=""></option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            </select> - <select name="Ecom_Payment_Card_ExpDate_Year">
            <option value=""></option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            </select></td>
        </tr>
        <tr>
            <td>Kart Türü</td>
            <td><input type="radio" value="1" name="cardType"> Visa <input type="radio" value="2" name="cardType"> MasterCard</td>
        </tr>
        <tr>
            <td>Güvenlik Kodu</td>
        	<td><input type="text" name="cv2" size="4" value="" /></td>
        </tr>
        <tr>
            <td align="center">&nbsp;</td>
            <td align="left"><input type="submit" value="Ödeme Yap" /></td>
        </tr>
    </table>
</form>
</center>
</body>
</html>