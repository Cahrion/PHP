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
$hashparams		=	$_POST["HASHPARAMS"];
$hashparamsval	=	$_POST["HASHPARAMSVAL"];
$hashparam		=	$_POST["HASH"];
$storekey		=	"xxxxxx";	// Sanal Pos Onaylandığında Bankanın Size Verdiği Sanal Pos Ekranına Girerek Oluşturulacak Olan İş Yeri Anahtarı
$paramsval		=	"";
$index1			=	0;
$index2			=	0;
	while($index1<@strlen($hashparams)){
		$index2		=	@strpos($hashparams,":",$index1);
		$vl			=	$_POST[@substr($hashparams,$index1,$index2-$index1)];
			if($vl==null)
			$vl			=	"";
 			$paramsval	=	$paramsval.$vl; 
			$index1		=	$index2+1;
	}
$storekey		=	"xxxxxx";	// Sanal Pos Onaylandığında Bankanın Size Verdiği Sanal Pos Ekranına Girerek Oluşturulacak Olan İş Yeri Anahtarı
$hashval		=	$paramsval.$storekey;
$hash			=	@base64_encode(@pack('H*',@sha1($hashval)));
	if($paramsval!=$hashparamsval || $hashparam!=$hash) 	
	echo "<h4>Güvenlik Uyarısı! Sayısal İmza Geçerli Değil.</h4>";
	
$name			=	"xxxxxx";	// Bankanın Size Verdiği Sanal Pos Ekranından Oluşturacağınız 3D Kullanıcı Adı
$password		=	"xxxxxx";	// Bankanın Size Verdiği Sanal Pos Ekranından Oluşturacağınız 3D Kullanıcı Şifresi
$clientid		=	$_POST["clientid"];
$mode			=	"P";	// P Çekim İşlemi Demek, T Test İşlemi Demek (Kesinlikle P Olacak Yoksa Çekimler Kart Sahibine Geri Gider)
$type			=	"Auth";	// Auth: Satış PreAuth: Ön Otorizasyon
$expires		=	$_POST["Ecom_Payment_Card_ExpDate_Month"]."/".$_POST["Ecom_Payment_Card_ExpDate_Year"];
$cv2			=	$_POST['cv2'];
$tutar			=	$_POST["amount"];
$taksit			=	"";	// Taksit Yapılacak İse Taksit Sayısı Girilmeli, 0 Kesinlikle Girilmeyecektir. Tek Çekim İçin Boş Bırakılacaktır, Taksit İşlemleri İçin Minimum 2 Girilir. Maksimum Bankanın Size Vereceği Taksit Sayısı Kadardır.
$oid			=	$_POST['oid'];
$lip			=	GetHostByName($REMOTE_ADDR);
$email			=	"";	//	İsterseniz Çekimi Yapan Kullanıcınızın E-Mail Adresini Gönderebilirsiniz
$mdStatus		=	$_POST['mdStatus'];
$xid			=	$_POST['xid'];
$eci			=	$_POST['eci'];
$cavv			=	$_POST['cavv'];
$md				=	$_POST['md'];

if($mdStatus =="1" || $mdStatus == "2" || $mdStatus == "3" || $mdStatus == "4"){ 	
	$request	=	"DATA=<?xml version=\"1.0\" encoding=\"ISO-8859-9\"?>"."<CC5Request>"."<Name>{NAME}</Name>"."<Password>{PASSWORD}</Password>"."<ClientId>{CLIENTID}</ClientId>"."<IPAddress>{IP}</IPAddress>"."<Email>{EMAIL}</Email>"."<Mode>P</Mode>"."<OrderId>{OID}</OrderId>"."<GroupId></GroupId>"."<TransId></TransId>"."<UserId></UserId>"."<Type>{TYPE}</Type>"."<Number>{MD}</Number>"."<Expires></Expires>"."<Cvv2Val></Cvv2Val>"."<Total>{TUTAR}</Total>"."<Currency>949</Currency>"."<Taksit>{TAKSIT}</Taksit>"."<PayerTxnId>{XID}</PayerTxnId>"."<PayerSecurityLevel>{ECI}</PayerSecurityLevel>"."<PayerAuthenticationCode>{CAVV}</PayerAuthenticationCode>"."<CardholderPresentCode>13</CardholderPresentCode>"."<BillTo>"."<Name></Name>"."<Street1></Street1>"."<Street2></Street2>"."<Street3></Street3>"."<City></City>"."<StateProv></StateProv>"."<PostalCode></PostalCode>"."<Country></Country>"."<Company></Company>"."<TelVoice></TelVoice>"."</BillTo>"."<ShipTo>"."<Name></Name>"."<Street1></Street1>"."<Street2></Street2>"."<Street3></Street3>"."<City></City>"."<StateProv></StateProv>"."<PostalCode></PostalCode>"."<Country></Country>"."</ShipTo>"."<Extra></Extra>"."</CC5Request>";
	$request	=	@str_replace("{NAME}",$name,$request);
	$request	=	@str_replace("{PASSWORD}",$password,$request);
	$request	=	@str_replace("{CLIENTID}",$clientid,$request);
	$request	=	@str_replace("{IP}",$lip,$request);
	$request	=	@str_replace("{OID}",$oid,$request);
	$request	=	@str_replace("{TYPE}",$type,$request);
	$request	=	@str_replace("{XID}",$xid,$request);
	$request	=	@str_replace("{ECI}",$eci,$request);
	$request	=	@str_replace("{CAVV}",$cavv,$request);
	$request	=	@str_replace("{MD}",$md,$request);
	$request	=	@str_replace("{TUTAR}",$tutar,$request);
	$request	=	@str_replace("{TAKSIT}",$taksit,$request);
	
	$url		=	"https://<sunucu_adresi>/<apiserver_path>"; // Bu Adres Banka veya EST Firması Tarafından Verilir
	$ch			=	@curl_init();
	@curl_setopt($ch, CURLOPT_URL,$url);
	@curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,1);
	@curl_setopt($ch, CURLOPT_SSLVERSION, 3);
	@curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	@curl_setopt($ch, CURLOPT_TIMEOUT, 90);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
	$result		=	@curl_exec($ch);
		if(@curl_errno($ch)){
           print @curl_error($ch);
		}else{
			@curl_close($ch);
		}
	$Response		=	"";
	$OrderId		=	"";
	$AuthCode		=	"";
	$ProcReturnCode	=	"";
	$ErrMsg			=	"";
	$HOSTMSG		=	"";
	$HostRefNum		=	"";
	$TransId		=	"";
	$response_tag	=	"Response";
	$posf			=	@strpos($result,("<".$response_tag.">"));
	$posl			=	@strpos($result,("</".$response_tag.">"));
	$posf			=	$posf+@strlen($response_tag)+2 ;
	$Response		=	@substr($result,$posf,$posl-$posf);
	$response_tag	=	"OrderId";
	$posf			=	@strpos($result,("<".$response_tag.">"));
	$posl			=	@strpos($result,("</".$response_tag.">")) ;
	$posf			=	$posf+@strlen($response_tag)+2;
	$OrderId		=	@substr($result,$posf,$posl-$posf);
	$response_tag	=	"AuthCode";
	$posf			=	@strpos($result,"<".$response_tag.">");
	$posl			=	@strpos($result,"</".$response_tag.">");
	$posf			=	$posf+@strlen($response_tag)+2 ;
	$AuthCode		=	@substr($result,$posf,$posl-$posf);
	$response_tag	=	"ProcReturnCode";
	$posf			=	@strpos($result,"<".$response_tag.">");
	$posl			=	@strpos($result,"</".$response_tag.">");
	$posf			=	$posf+@strlen($response_tag)+2 ;
	$ProcReturnCode	=	@substr($result,$posf,$posl-$posf);
	$response_tag	=	"ErrMsg";
	$posf			=	@strpos($result,"<".$response_tag.">");
	$posl			=	@strpos($result,"</".$response_tag.">");
	$posf			=	$posf+@strlen($response_tag)+2;
	$ErrMsg			=	@substr($result,$posf,$posl-$posf);
	$response_tag	=	"HostRefNum";
	$posf			=	@strpos($result,"<".$response_tag.">");
	$posl			=	@strpos($result,"</".$response_tag.">");
	$posf			=	$posf+@strlen($response_tag)+2;
	$HostRefNum		=	@substr($result,$posf,$posl-$posf);
	$response_tag	=	"TransId";
	$posf			=	@strpos($result,"<".$response_tag.">");
	$posl			=	@strpos($result,"</".$response_tag.">");
	$posf			=	$posf+@strlen($response_tag)+2;
	$TransId		=	@substr($result,$posf,$posl-$posf);
		if($Response==="Approved"){
			echo "Ödeme isleminiz basariyla gerçeklestirildi.";	// İster Direk Sayfayı Yönlendiririz, İstersek de Burda İşlem Yapabiliriz.
		}else{
			echo "Ödeme isleminiz sırasında hata oluştu. Hata = ".$ErrMsg;
		}
}else{
	echo "Kredi Kartı Bankası 3D Onayı Vermedi, Lütfen Bilgileriniz Kontrol Edip Tekrar Deneyiniz. Sorununuz Devam Eder İse Lütfen Kartınızın Sahibi Olan Bankanın Müşteri Temsilcileriyle İletişime Geçiniz.";
}
?>
</body>
</html>