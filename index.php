<?php  
   include "koneksi.php";
    if(isset($_GET['submit'])){
        $nama = htmlentities($_GET['nama']);
        $password = htmlentities($_GET['password']);
        $username = htmlentities($_GET['username']);
        $email = htmlentities($_GET['email']);
        $enc_password = hash('sha256', $password);

        $query = $db->prepare("INSERT INTO tb_biodata(nama,password,username,email)
        VALUES (:nama,:password,:username,:email)");
        $query->bindParam(":nama", $nama);
        $query->bindParam(":password", $enc_password);
        $query->bindParam(":username", $username);
        $query->bindParam(":email", $email);;

        // Jalankan perintah SQL
        $query->execute();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="atas">
	<p>Instagram</p>
</div>
<div id="kiri">
	<div class="img"><img src="image/ig.jpg"></div>
</div>
<div id="kanan">
	<div class="kotak-atas">
		<div class="gambar"><img src="image/instagram-logo.png" height="100px" width="200"></div>
		<div class="paragraf" align="center"><p>Sign up to see photos and videos from your friends.</p></div>
		<a href="#" class="facebook" a>Facebook</a>
		<p class="paragraf">Or</p>
		<div class="form">
			<form menthod="GET">
    			<input type="text" name="nama" placeholder="Name" style="width: 219px; height: 30px; border-radius:5px;border: 2px solid #e7e7e7 ; margin-left: 17%; margin-top: -10px;">
    			<input type="text" name="username" placeholder="Username" style="width: 219px; height: 30px; border-radius:5px;border: 2px solid #e7e7e7 ; margin-left: 17%;     margin-top: 5px;">
    			<input type="email" name="email" placeholder="Email" required="email" style="width: 219px; height: 30px; border-radius:5px;border: 2px solid #e7e7e7 ; margin-left: 17%;     margin-top: 5px;">
    			<input type="password" name="password" placeholder="Password" required="password" style="width: 219px; height: 30px; border-radius:5px;border: 2px solid #e7e7e7 ; margin-left: 17%;     margin-top: 5px;";>
    			<input class="facebook" type="submit" name="submit" value="submit" style="width: 219px; height: 30px; border-radius:5px; background: #3897f0; border: solid 1px white; margin-left: 17%;    margin-top: 15px; height: 36px">
  			</form>\
		</div>
		<div class="paragraf"></div>
	</div>
	<div class="kotak-bawah">
		<div class="paragraf"></div>
	</div>
</div>
</body>
</html>