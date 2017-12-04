<!DOCTYPE html>
<html>
<head>
	<title>Detail Buku</title>
	<link rel=stylesheet href="<?php echo asset_url() ?>css/style.css" type="text/css">	<link rel="stylesheet" type="text/css" href="<?php echo asset_url() ?>css/grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
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
	<div class="row" style="border:2px solid black;">
	<div class="container">
		<!-- Categories Section -->
		<div class="col-2 catSection">
			<ul>
				<h2>Categories</h2>
				<li><a href="<?php echo asset_url() ?>#Math">Mathematics</a></li>
				<li><a href="<?php echo asset_url() ?>#Biology">Biology</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Computer Science</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Computer Science</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Computer Science</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Computer Science</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Computer Science</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Computer Science</a></li>
				<li><a href="<?php echo asset_url() ?>#ComputerScience">Computer Science</a></li>
			</ul>
		</div>
		<div class="col-8 containerInfo">
			<div class="infoBuku">
				<img src="<?php echo asset_url() ?>img/buku.jpg" alt="Buku">
				<h3><?php echo $paper['namaPaper']; ?></h3>
				<p><?php echo $user->username; ?></p>
				<p>Categories : Lorem Ipsum Dolor</p>
				<div class="tombol">
					<button class="wishlist"></button>
					<a href="<?php echo base_url('index.php/booksDetail/wishlist/'.$idPaper); ?>">Add to Wishlist</a>
					<button class="read">
						Read
					</button>
					<button class="download">Download</button>
				</div>
			</div>
		</div>
	</div>
		<div class="footer">
			<ul>
				<li class="col-1"><a href="#home">Home</a></li>
				<li class="col-1"><a href="#categoriesNav">Categories</a></li>
				<li class="col-1"><a href="#about">About</a></li>
				<li class="col-8 searchBarBelow" style="float: right;">
					<input type="text" name="search" placeholder="Search..">
					<br>
					<p>Copyright pap Post a paper 2017</p>
				</li>
			</ul>
		</div>
</body>
</html>
