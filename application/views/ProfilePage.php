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
<div class="navbar">
		<ul>
			<li class="logo">
				<img src="<?php echo asset_url();?>img\logo.png" style='height: 100%; width: 100%; object-fit: contain'>
			</li>
<!--		<li class="searchBar">
		    	<input type="text" name="search" placeholder="Search..">	
		    </li>-->
			<li class="menu">
				<ul>
					<li class="small"><a href="<?php echo base_url('index.php/Home'); ?>">Home</a></li>
					<li class="small2"><a href="<?php echo base_url('index.php/categories/index/1') ?>">Categories</a></li>
					<li class="small"><a href="<?php echo base_url('index.php/Login/logout') ?>">Logout</a></li>
					<li class="small2"><a href="<?php echo base_url('index.php/profilePage'); ?>">Halo <?php echo $this->session->userdata("nama"); ?></a></li>
				<ul>
			</li>
		</ul>
	</div>
	<div class="profileImage">
		<!-- -->
		<img src="<?php echo asset_url() ?>img/fotoProfil.png" alt="Foto Profil" style="border-radius:50%">
		<h1><b><?php echo $this->session->userdata('nama'); ?></b></h1>
		<h4><i><?php echo $this->session->userdata('email'); ?></i></h4>
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
				<h3>Pilih kategori dari penelitian ini</h3>

				<input type="checkbox" name="kategori[]" value="1">Computer Science
				<input type="checkbox" name="kategori[]" value="2">Physics 
				<input type="checkbox" name="kategori[]" value="3">Mathematics
				<input type="checkbox" name="kategori[]" value="4">Chemistry 
				<input type="checkbox" name="kategori[]" value="5">Biology
				<input type="checkbox" name="kategori[]" value="6">Others 
				<?php echo form_close(); ?>
<!-- 				<form action="<?php echo base_url('ProfilePage/do_upload') ?>" method ="POST">

				</form>	 -->
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
		<?php foreach ($data as $value) { ?>
			<li>
			<div>
				<a href="<?php echo base_url('index.php/booksDetail/index/').$value['idPaper']; ?>">
				<img src="<?php echo asset_url() ?>img\buku.jpg">
				<h4><?php echo $value['namaPaper'] ;?></h4>
				<p><i>By <?php echo $this->session->userdata['nama']; ?></i></p>
				</a>
			</div>
		</li>
		<?php } ?>
		</ul>	
	</div>
	<div class="books">
		<h1><b>Wishlist</b></h1>
		<ul>
		<?php foreach ($judulPaper as $value) { ?>
			<li>
				<div>
					<a href="<?php echo base_url('index.php/booksDetail/index/').$value['idPaper']; ?>">
					<img src="<?php echo asset_url() ?>img\buku.jpg">
					<h4><?php echo $value['namaPaper'] ;?></h4>
					<h4><?php echo $value['username'] ;?></h4>
					<p><i></i></p>
					</a>
				</div>
			</li>
		<?php } ?>
		</ul>
	</div>
	<div class="books">
		<h1><b>Download History</b></h1>
		<ul>
			<?php foreach ($readHistory as $value) { ?>
				<li>
					<div>
						<a href="<?php echo base_url('index.php/booksDetail/index/').$value['idPaper']; ?>">
						<img src="<?php echo asset_url() ?>img\buku.jpg">
						<h4><?php echo $value['namaPaper'] ;?></h4>
						<h4><?php echo $value['username'] ;?></h4>
						<p><i></i></p>
						</a>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
	<div class="footer">
	  <ul>
	   <li class="col-1"><a></a></li>
	   <li class="col-1"><a href="<?php echo base_url('index.php/Home'); ?>">Home</a></li>
	   <li class="col-1"><a href="<?php echo base_url('index.php/categories/index/1') ?>">Categories</a></li>
	   <li class="searchBarBelow" style="float: right;">
	<!--   <input type="text" name="search" placeholder="Search..">
	    <br>-->
	    <p>Copyright pap Post a paper 2017</p>
	   </li>
	  </ul>
	 </div>
</body>
</html>
