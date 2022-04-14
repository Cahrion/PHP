<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>
<style>
	.input{
		width: 100%;
		height: 15px;
		margin: 0;
		padding: 5px 10px 5px 10px;
	}	
	.TextAreaAlani{
		width: 100%;
		height: 150px;
		margin: 0;
		padding: 5px 10px 5px 10px;
	}	
	.GonderButonu{
		height: 30px;
		margin: 0;
		padding: 5px 50px 5px 50px;
		border: 1px solid #00FF00;
		background-color: #009900;
		color: #ffffff;
		cursor: pointer;
	}	
	.GonderButonu:hover{
		border: 1px solid #000000;
		background-color: #00FF00;
		color: #000000;
	}
	
</style>
<body>
	<form action="sonuc.php" method="post">
		<table align="center" border="0" width="500" cellpadding="0" cellspacing="0">
			<tr>
				<td height="30" width="156">Adınız Soyadınız</td>
				<td height="30" width="20">:</td>
				<td height="30" width="330"><input type="text" name="adisoyadi" class="input"></td>
			</tr>	
			<tr>
				<td height="30" width="156">Telefon Numaranız</td>
				<td height="30" width="20">:</td>
				<td height="30" width="330"><input type="text" name="telefon" class="input"></td>
			</tr>
			<tr>
				<td height="30" width="156">E-Mail Adresiniz</td>
				<td height="30" width="20">:</td>
				<td height="30" width="330"><input type="text" name="emailadresi" class="input"></td>
			</tr>
			<tr>
				<td height="30" width="156">Konu</td>
				<td height="30" width="20">:</td>
				<td height="30" width="330"><input type="text" name="konusu" class="input"></td>
			</tr>
			<tr>
				<td height="30" width="156" valign="top">Mesaj</td>
				<td height="30" width="20" valign="top">:</td>
				<td height="30" width="330"><textarea name="mesaji" class="TextAreaAlani"></textarea></td>
			</tr>
			<tr>
				<td height="30" width="156">&nbsp;</td>
				<td height="30" width="20">&nbsp;</td>
				<td height="30" width="330"><input type="submit" value="Gönder" class="GonderButonu"></td>
			</tr>
		
		</table>
	</form>
</body>
</html>