<!DOCTYPE html>
<html>
<?php $this->session->userdata("nama") ?>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
		<!-- First Parallax Image with Logo Text -->
	<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
		<!-- Navigasi Bar -->
		<div class="navbarHome">
			<ul>
			    <li class="searchBar">
			    	<input type="text" name="search" placeholder="Search..">
			    </li>
				<li class="menu">
					<ul>
					<li class="small"><a href="Home">Home</a></li>
					<li class="small2"><a href="categories">Categories</a></li>
					<li class="small"><a href="Home">About</a></li>
					<li class="small2"><a href="profilePage">Halo <?php echo $this->session->userdata("nama"); ?></a></li>
					<ul>
				</li>
			</ul>
		</div>
		<div class="logoPap">
			<img src="<?php echo asset_url();?>img\logo.png">
			<h1><b><i>Post a paper</i></b></h1>
			<h2><b>Helping people gaining knowledge</b></h2>
		</div>
	</div>
	<div class="info">
		<h3 style="font-size: 40px;">What is <i>pap?</i></h3>
		<p>pap(post a paper) is a Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
	<!-- Categories Below -->
	<div class="Categories" style="text-align: center;">
		<h3 style="font-size: 35px;"><b>Discover the Categories</b></h3>
		<div class="catBelow">
			<ul>
				<li><a href="<?php echo base_url('Categories/index/1') ?>"">Computer Science</a></li>
				<li><a href="<?php echo base_url('Categories/index/2') ?>">Mathematics</a></li>
				<li><a href="<?php echo base_url('Categories/index/3') ?>">Physics</a></li>
				<li><a href="<?php echo base_url('Categories/index/4') ?>">Chemistry</a></li>
				<li><a href="<?php echo base_url('Categories/index/5') ?>">Biology</a></li>
				<li><a href="<?php echo base_url('Categories/index/6') ?>">Others</a></li>
			</ul>
		</div>
	</div>
	<div class="footer">
		<ul>
			<li class="col-1"><a href="home.php">Home</a></li>
			<li class="col-1"><a href="kategori.php">Categories</a></li>
			<li class="col-1"><a href="about.php">About</a></li>
			<li class="col-8 searchBarBelow" style="float: right;">
				<input type="text" name="search" placeholder="Search..">
				<br>
				<p>Copyright pap Post a paper 2017</p>
			</li>
		</ul>
	</div>
</body>
</html>
