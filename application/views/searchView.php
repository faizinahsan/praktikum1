<!DOCTYPE html>
<html>
<head>
	<title>Hasil Search</title>
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
			    	<form role="search" action="<?php echo base_url('index.php/searchView/search_keyword'); ?>" method="get">
			    		<input type="text" name="keyword" placeholder="Search.."></input>
			    		<input type="submit" value = "Search" ></input>
			    	</form>		
			    </li>
				<li class="menu">
					<ul>
						<li class="small"><a href="<?php echo base_url('index.php/Home'); ?>">Home</a></li>
						<li class="small2"><a href="<?php echo base_url('index.php/categories/index/1') ?>">Categories</a></li>
						<li class="small"><a href="<?php echo base_url('index.php/Login/logout') ?>">Logout</a></li>
						<li class="small2"><a href="<?php echo base_url('index.php/profilePage'); ?>">Halo <?php echo $this->session->userdata("nama"); ?></a></li>
					</ul>
				</li>
	</ul>
	</div>
		<div class="row" style="border:2px solid black;">
			<!-- Categories Section -->
			<div class="col-2 catSection">
				<ul>
					<h2>Categories</h2>
					<li><a href="<?php echo base_url('Categories/index/1') ?>">Computer Science</a></li>
					<li><a href="<?php echo base_url('Categories/index/2') ?>">Mathematics</a></li>
					<li><a href="<?php echo base_url('Categories/index/3') ?>">Physics</a></li>
					<li><a href="<?php echo base_url('Categories/index/4') ?>">Chemistry</a></li>
					<li><a href="<?php echo base_url('Categories/index/5') ?>">Biology</a></li>
					<li><a href="<?php echo base_url('Categories/index/6') ?>">Others</a></li>
				</ul>
			</div>
			<div class="listBukuParent">
			<?php foreach ($data as $value) { ?>
					<div class="col-8 listBuku">
						<div>
							<img src="<?php echo asset_url() ?>img\buku.jpg">
							<h3><?php echo $value->namaPaper ?></h3>
							</a>
						</div>
					</div>
			<?php } ?>
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