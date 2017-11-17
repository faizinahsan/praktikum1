<html>
<head>
	<title>Login PAP</title>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/Login.css">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="col-4" id="identity">
		<img src="img/identity.png" alt="Identity" style="width:90%;height:auto;" align="middle">
	</div>
	<div class="col-6">	
		<div class="image">
			<img src="img/background login.png" alt="BGLogin" style="width:100%;height:auto;" align="middle">
			<div class="teks">
				<p>Belum punya akun?</p>
				<a href="Signup.php"><p><u>Daftar yuk</u></p></a>
				<input type="text" placeholder="Username" name="uname" required>
				<br><br>
				<input type="password" placeholder="Password" name="psw" required>
				<br><br>
				<a href="home.php"><button type="submit" style="width:80%">Login</button></a>
				<br><br>
			</div>
		</div>
	</div>
</body>
</html>