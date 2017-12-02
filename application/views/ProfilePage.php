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
	<div class="navbarHome">
		<ul>
		    <li class="searchBar">
		    	<input type="text" name="search" placeholder="Search..">
		    </li>
			<li class="menu">
				<ul>
					<li class="small"><a href="Home">Home</a></li>
					<li class="small2"><a href="categories">Categories</a></li>
					<li class="small"><a href="profilePage">About</a></li>
					<li class="small2 dropdown">
						<a href="profilePage">Halo <?php echo $this->session->userdata("nama"); ?></a>
						<div class="dropContent">
							<a href="profilePage">Profile Page</a>
							<a href="">Logout</a>
						</div>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="profileImage" style="">
		<!-- -->
		<img src="<?php echo asset_url() ?>img/fotoProfil.png" alt="Foto Profil" style="border-radius:50%">
		<h1><b>John Doe</b></h1>
		<h4><i>johndoe@lorem.com</i></h4>
	<div class="doUpload">
		<?php echo form_open_multipart('upload/do_upload');?>
		<input type="file" name="gambar"></input>	
		<!-- <input type="file" name="gambar">
		<button type="submit">Upload Gambar</button> -->
		<?php echo form_close(); ?>
	
	</div>	
	
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
