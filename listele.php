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
				<li><a href="guncelle.php">Şarkı Güncelle</a></li>
				<li><a href="sil.php">Şarkı Sil</a></li>
				<li><a href="listele.php" class="active">Şarkı Listesi</a></li>
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
			<h1>Şarkıları Listele</h1>
            <center>
			<form action="" method="post">
				<table cellspacing="5" cellpadding="5">
    				<tr>
    					<td>Kayıt No:</td>
    					<td><input type="text1" name="kayit" /></td>
    				</tr>
    			</table>
                </br>
    			</br>
            	<input class="button" type="submit" value="Şarkı Listele" />
			</form>
            
            <br/>
            <?php 
				if($_POST){	
            		$kayit    = $_POST["kayit"];
					if($kayit==null){
    					$listele = mysqli_query($baglan,"select * from bilgiler ");
						while($cekilen_veri=mysqli_fetch_array($listele)){
							extract($cekilen_veri);
							echo "Kayıt No: ".$kayit_no.", Şarkı Adı: ".$sarki_adi.", Sanatçı: ".$sanatci.", Tarzı: ".$tarz.", Çıkış Tarihi: ".$cikis_tarihi.", Albüm: ".$album."</br>";
        				}
					}else{
						$listele = mysqli_query($baglan,"select * from bilgiler where kayit_no='$kayit'");
						while($cekilen_veri=mysqli_fetch_array($listele)){
							extract($cekilen_veri);
							echo "Kayıt No: ".$kayit_no.", Şarkı Adı: ".$sarki_adi.", Sanatçı: ".$sanatci.", Tarzı: ".$tarz.", Çıkış Tarihi: ".$cikis_tarihi.", Albüm: ".$album."</br>";
						}
					}
				}
			?>
			</center>
		</div>
	</body>
</html>
