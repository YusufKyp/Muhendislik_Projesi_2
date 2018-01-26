<html>
	<head>
		<title>Müzik Kütüphanem</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
		<div id="nav">
			<ul>
				<li><a href="index.php">Anasayfa</a></li>
				<li><a href="ekle.php">Şarkı Ekle</a></li>
				<li><a href="guncelle.php" class="active">Şarkı Güncelle</a></li>
				<li><a href="sil.php">Şarkı Sil</a></li>
				<li><a href="listele.php">Şarkı Listesi</a></li>
			</ul>
		</div>
        
        
<?php
	$user="root";
	$pass="";
	$host="localhost";
	$db="sarki_kutuphanesi";
	$baglan=mysqli_connect($host,$user,$pass);
	mysqli_select_db($baglan,'sarki_kutuphanesi');
?>     
        
		<div id="container">
			<h1>Şarkı Güncelle</h1>
            <center>
            <form action="" method="post">
				<table cellspacing="5" cellpadding="5">
    				<tr>
    					<td>Kayıt No:</td>
    					<td><input type="text1" name="kayit" /></td>
    					<td>Şarkı Adı:</td>
    					<td><input type="text1" name="ad" /></td>
       					<td>Sanatçı:</td>
    					<td><input type="text1" name="sanatci" /></td>
    				</tr>
    				<tr>
    					<td>Tarzı:</td>
    					<td><input type="text1" name="tarz" /></td>
    					<td>Çıkış Tarihi:</td>
    					<td><input type="text1" name="yil" /></td>
    					<td>Albüm</td>
    					<td><input type="text1" name="album" /></td>
    				</tr>
    			</table>
                </br>
    			</br>
                <input class="button" type="submit" value="Şarkı Güncelle" />
			</form>

<?php 
        if($_POST){
            $kayit    = $_POST["kayit"];
            $ad      = $_POST["ad"];
            $sanatci = $_POST["sanatci"];
			$tarz    = $_POST["tarz"];
			$yil     = $_POST["yil"];
			$album   = $_POST["album"];
            $guncelle= mysqli_query($baglan,"update bilgiler set sarki_adi='$ad', sanatci='$sanatci', tarz='$tarz', cikis_tarihi='$yil',album='$album' where kayit_no='$kayit'");
            if($guncelle){
                echo "Başarılı Bir Şekilde Güncellendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
?>
            </center>
            
            
		</div>
	</body>
</html>

