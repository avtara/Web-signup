<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="atas">
	<p>Instagram</p>
</div>
<div id="hasi" align="center">
	<p style="margin-top: 10%;color: #999999">Selamat datang, <h7 style="font-weight: bold; color: #999999"><?php echo $_GET["nama"]; ?></h7> di Instagram </p><p style="color: #999999">username anda adalah <h7 style="font-weight: bold;"><?php echo $_GET["username"]; ?></h7>
	<br>Password anda adalah <h7 style="font-weight: bold;"><?php echo $_GET["email"]; ?></h7>
	<br>Password anda adalah <h7 style="font-weight: bold;"><?php echo $_GET["password"]; ?></h7></p>
</div>
</body>
</html>