<!DOCTYPE html>
<html>
<head>
	<title>Detail Buku</title>
	<link rel=stylesheet href="<?php echo asset_url() ?>css/style.css" type="text/css">	<link rel="stylesheet" type="text/css" href="<?php echo asset_url() ?>css/grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="navbar">
		<ul>
			<li class="logo">
				<img src="<?php echo asset_url();?>img\logo.png" style='height: 100%; width: 100%; object-fit: contain'>
			</li>
		    <li class="searchBar">
		    	<input type="text" name="search" placeholder="Search..">
		    </li>
			<li class="menu">
				<ul>
				<li class="small"><a href="<?php echo base_url('index.php/Home'); ?>">Home</a></li>
				<li class="small2"><a href="<?php echo base_url('index.php/Categories'); ?>">Categories</a></li>
				<li class="small"><a href="#">About</a></li>
				<li class="small2"><a href="<?php echo base_url('index.php/profilePage'); ?>">Halo <?php echo $this->session->userdata("nama"); ?></a></li>
				<ul>
			</li>
		</ul>
	</div>
	<div class="row" style="border:2px solid black;">
	<div class="container">
		<!-- Categories Section -->
		<div class="col-2 catSection">
			<ul>
				<h2>Categories</h2>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Computer Science</a></li>
				<li><a href="<?php echo asset_url() ?>#Math">Mathematics</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Physics</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Chemistry</a></li>
				<li><a href="<?php echo asset_url() ?>#Biology">Biology</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Others</a></li>
			</ul>
		</div>
		<div class="col-8 containerInfo">
			<div class="infoBuku">
				<img src="<?php echo asset_url() ?>img/buku.jpg" alt="Buku">
				<h3><?php echo $paper['namaPaper']; ?></h3>
				<p>by <?php echo $user->username; ?></p>
				<p>Categories :
					<ul>
					<?php foreach ($kategori as $value){ ?>
					<li>
					<?php echo "".$value['namaKategori']."<br>"; ?>
					</li>
					<?php } ?>
					</ul>
				</p>
				<div class="tombol">
					<a href="<?php echo base_url('index.php/booksDetail/wishlist/'.$idPaper); ?>">
					<button class="wishlist">Add to Wishlist</button></a>
					<button class="download">Download</button>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<ul>
			<li class="menu">
				<ul>
					<li><a href="<?php echo base_url('index.php/Home'); ?>">Home</a></li>
					<li><a href="<?php echo base_url('index.php/Categories'); ?>">Categories</a></li>
					<li><a href="#about">About</a></li>
				</ul>
			</li>
			<li class="searchBarBelow" style='float: right;'>
				<input type="text" name="search" placeholder="Search..">
				<br>
				<p>Copyright pap Post a paper 2017</p>
			</li>
		</ul>
	</div>
</body>
</html>
