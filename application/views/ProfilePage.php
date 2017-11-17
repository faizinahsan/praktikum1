<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel=stylesheet href="<?php echo asset_url();?>css/style.css" type="text/css">
	<link rel=stylesheet href="<?php echo asset_url();?>css/grid.css">
	<link rel="stylesheet" type="text/css" href="grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="navbar">
		<ul>
			<li class="col-1 logoClass"><img src="<?php echo asset_url() ?>img/logo.png" alt="Logo"></li>
		    <li class="col-3 searchBar" style="float: left;">
		    	<input type="text" name="search" placeholder="Search.."">
		    </li>
		    <li class="col-2"><a href="Home">Home</a></li>
		    <li class="col-2"><a href="categories">Categories</a></li>
		    <li class="col-2"><a href="Home">About</a></li>
		    <li class="col-2"><a href="profilePage">My Profile</a></li>
		</ul>
	</div>
	<div class="profileImage" style="">
		<!-- -->
		<img src="<?php echo asset_url() ?>img/fotoProfil.png" alt="Foto Profil" style="border-radius:50%">
		<h1><b>John Doe</b></h1>
		<h4><i>johndoe@lorem.com</i></h4>
	</div>
	<!-- For My Book ,wishlist, and read history -->
	<div class="books">
		<h1><b>My Book</b></h1>
		<ul>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		</ul>	
	</div>
	<div class="books">
		<h1><b>Wishlist</b></h1>
		<ul>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
			<li>
				<div>
					<a href="#DetailBuku">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4>Title Lorem Ipsum Dolor</h4>
					<p><i>By John Doe</i></p>
					</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="books">
		<h1><b>Read History</b></h1>
		<ul>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		<li>
			<div>
				<a href="#DetailBuku">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4>Title Lorem Ipsum Dolor</h4>
				<p><i>By John Doe</i></p>
				</a>
			</div>
		</li>
		</ul>
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
