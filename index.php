<html>
<head>
<title>Kayıt Projesi</title>
<link rel="stylesheet" type="text/css" href="stil.css" />
</head>
<body>
<div class="userform">
<h1>Uye Kayit Formu</h1>
<form action="kayit.php" method="POST">
<input type="text" name="adi" id="adi" placeholder="Adiniz & Soyadiniz.." class="yazi" />
<br />
<input type="text" name="kadi" id="kadi" placeholder="Kullanici Adiniz.." class="yazi" />
<br />
<input type="password" name="pass" id="pass" placeholder="Parolaniz.." class="yazi" />
<br />
<input type="text" name="mail" id="mail" placeholder="E-Mail Adresiniz.." class="yazi" />
<br />
<input type="submit" name="gonder" value="Kayit" class="buton" />
<input type="reset" name="sil" value="Temizle" class="buton" />
</form>
</div>
<div class="userform">
<h1>Uye Silme Formu</h1>
<form action="sil.php" method="POST">
<input type="text" name="kadi" id="kadi" placeholder="Kullanici Adi.." class="yazi" />
<br />
<input type="submit" name="gonder" value="Sil" class="buton" />
<input type="reset" name="sil" value="Temizle" class="buton" />
</form>
</div>
<div class="userform">
<h1>Uye sifre Degistirme Formu</h1>
<form action="guncelle.php" method="POST">
<input type="text" name="kadi" id="kadi" placeholder="Kullanici Adi.." class="yazi" />
<br />
<input type="password" name="pass" id="pass" placeholder="Yeni Parola.." class="yazi" /><br />
<input type="submit" name="gonder" value="Kayit" class="buton" />
<input type="reset" name="sil" value="Temizle" class="buton" />
</form>
</div>
</body>
</html>