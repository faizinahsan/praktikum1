<html>
<head>
	<title>SignUp PAP</title>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/Signup.css">
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
				<form action="<?php echo base_url('Signup/signup') ?>" method ="post">
				<h2>Registrasi</h2>
				<input class="txt" type="text" placeholder="E-mail" name="email" required>
				<br>
				<input class="txt" type="text" placeholder="Username" name="username" required>
				<br>
				<input class="txt" type="password" placeholder="Kata Sandi" name="password" required>
				<br>
				<input class="txt" type="password" placeholder="Konfirmasi Kata Sandi" name="passconf" required>
				<br>
				<button class="btn" type="submit" style="width:80%">Daftar</button>
				<br><hr>
				<div class="bottom">
					<p>Sudah punya akun?</p>
					<a href="<?php echo base_url() ?>"><p><u>Masuk yuk</u></p></a>
				</div>
			</form>
			</div>
		</div>
	</div>
</body>
</html>
