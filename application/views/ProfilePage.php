<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel=stylesheet href="<?php echo asset_url();?>css/style.css" type="text/css">
	<link rel=stylesheet href="<?php echo asset_url();?>css/grid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/modal.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
	<div class="profileImage">
		<!-- -->
		<img src="<?php echo asset_url() ?>img/fotoProfil.png" alt="Foto Profil" style="border-radius:50%">
		<h1><b>John Doe</b></h1>
		<h4><i>johndoe@lorem.com</i></h4>
		<!-- Trigger/Open The Modal -->
	<button id="myBtn">Upload Your Files</button>

	<!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- Modal content -->
	  <div class="modal-content">
	    <div class="modal-header">
	      <span class="close">&times;</span>
	      <h2>Upload Your File</h2>
	    </div>
	    <div class="modal-body">
			<div class="doUpload">
				<?php echo form_open_multipart('ProfilePage/do_upload');?>
				<input type="file" name="filePdf">	
				<!-- <input type="file" name="gambar">
				<button type="submit">Upload Gambar</button> -->
				<br /><br />
				<input type="submit" value="Upload" />
				<?php echo form_close(); ?>
				<h3>Pilih kategori dari penelitian ini</h3>
				<form>
				  <input type="checkbox" name="vehicle1" value="Bike">Computer Science
				  <input type="checkbox" name="vehicle2" value="Car">Mathematics 
				  <input type="checkbox" name="vehicle2" value="Car">Physics 
				  <input type="checkbox" name="vehicle2" value="Car">Chemistry 
				</form>	
			</div>
	    </div>


	</div>
	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>

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
