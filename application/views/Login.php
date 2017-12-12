<html>
<head>
	<title>Login PAP</title>
	<!--Coba Coba  -->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/Login.css">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="col-4" id="identity">
		<img src="<?php echo asset_url() ?>img/identity.png" alt="Identity" style="width:90%;height:auto;" align="middle">
	</div>
	<div class="col-6">	
		<div class="image">
			<img src="<?php echo asset_url() ?>img/background login.png" alt="BGLogin" style="width:100%;height:auto;" align="middle">
			<div class="teks">
				<p>Belum punya akun?</p>
				<a href="Signup"><p><u>Daftar yuk</u></p></a>
				<form action="<?php echo base_url('Login/aksi_login') ?>" method ="post">
					<input type="text" placeholder="Username" name="username" required>
					<br><br>
					<input type="password" placeholder="Password" name="password" required>
					<br><br>
					<button type="submit" style="width:80%" value="Login">Login</button></a>
				</form>
				<br><br>
			</div>
		</div>
	</div>
</body>
</html>
