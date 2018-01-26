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
				<li><a href="sil.php" class="active">Şarkı Sil</a></li>
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
            <h1>Şarkı Sil</h1>
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
            <input class="button" type="submit" value="Şarkı Sil" />
		</form>		
		
		
		<?php 
        	if($_POST){
            	$kayit    = $_POST["kayit"];
				if($kayit==null){
					echo "Bir değer giriniz!";
				}else{
            		$guncelle= mysqli_query($baglan,"delete from bilgiler where kayit_no='$kayit'");
            		if($guncelle){
                		echo "Başarılı Bir Şekilde Silindi!";
            		}else{
               		    echo "Bir Sorun Oluştu";
            		}
				}
        	}
		?>
        </center>
        
		</div>
	</body>
</html>
