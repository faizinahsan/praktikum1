<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/grid.css">
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
				<li class="small"><a href="Home">Home</a></li>
				<li class="small2"><a href="categories">Categories</a></li>
				<li class="small"><a href="categories">About</a></li>
				<li class="small2"><a href="profilePage">Halo <?php echo $this->session->userdata("nama"); ?></a></li>
				<ul>
			</li>
		</ul>
	</div>
	<div class="row" style="border:2px solid black;">
		<!-- Categories Section -->
		<div class="col-2 catSection">
			<ul>
				<h2>Categories</h2>
				<li><a href="#Math">Mathematics</a></li>
				<li><a href="#Biology">Biology</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
				<li><a href="#ComputerScience">Computer Science</a></li>
			</ul>
		</div>
		<div class="listBukuParent">
				<div class="col-8 listBuku">
					<div>
						<a href="#DetailBuku">
						<img src="<?php echo asset_url() ?>img\buku.jpg">
						<h3 >Title Lorem Ipsum Dolor</h3>
						<p><i>By John Doe</i></p>
						</a>
					</div>
				</div>
				<div class="col-8 listBuku">
					<div>
						<a href="#DetailBuku">
						<img src="<?php echo asset_url() ?>img\buku.jpg">
						<h3 >Title Lorem Ipsum Dolor</h3>
						<p><i>By John Doe</i></p>
						</a>
					</div>
				</div>
				<div class="col-8 listBuku">
					<div>
						<a href="#DetailBuku">
						<img src="<?php echo asset_url() ?>img\buku.jpg">
						<h3 >Title Lorem Ipsum Dolor</h3>
						<p><i>By John Doe</i></p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<ul>
				<li class="menu">
					<ul>
						<li><a href="Home">Home</a></li>
						<li><a href="categories">Categories</a></li>
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
