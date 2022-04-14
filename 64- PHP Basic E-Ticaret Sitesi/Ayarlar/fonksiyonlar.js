function IcerikGoster(Id){
	var Bolge 	= document.getElementById(Id).style;
	var Sonuc 	= Bolge.display;
	if(Sonuc == "block"){
	   Bolge.display = "none";
	}else{
	   Bolge.display = "block";
	}
}
function FotografDegistir(GelenYapi){
	var GelenYapiSRC 	= GelenYapi.src;
	document.getElementById("BuyukResim").src = GelenYapiSRC;
}
function SecilenOdeme(GelenYapi){
	var GelenYapiAdi 	= GelenYapi.id;
	var KrediYapi 	= document.getElementsByClassName("KKAlanlari");
	var BankaYapi	= document.getElementsByClassName("BHAlanlari");
	if(GelenYapiAdi == "Kredi"){
		for(var baslangic=0;baslangic<BankaYapi.length;baslangic++){
			BankaYapi[baslangic].style.display = "none";
		}
		for(var baslangic=0;baslangic<KrediYapi.length;baslangic++){
			KrediYapi[baslangic].style.display = "block";
		}
	}else if(GelenYapiAdi == "Banka"){
		for(var baslangic=0;baslangic<KrediYapi.length;baslangic++){
			KrediYapi[baslangic].style.display = "none";
		}
		for(var baslangic=0;baslangic<BankaYapi.length;baslangic++){
			BankaYapi[baslangic].style.display = "block";
		}
	}else{
		alert("Yapi Hatası.");
	}
}