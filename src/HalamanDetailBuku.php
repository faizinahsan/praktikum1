<!DOCTYPE html>
<html>
<head>
	<title>Detail Buku</title>
	<link rel=stylesheet href="css/style.css" type="text/css">	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="navbar">
		<ul>
			<li class="col-1 logoClass"><img src="img/logo.png" alt="Logo"></li>
		    <li class="col-3 searchBar" style="float: left;">
		    	<input type="text" name="search" placeholder="Search..">
		    </li>
		    <li class="col-2"><a href="#home">Home</a></li>
		    <li class="col-2"><a href="#categoriesNav">Categories</a></li>
		    <li class="col-2"><a href="#about">About</a></li>
		    <li class="col-2"><a href="#myprofile">My Profile</a></li>
		</ul>
	</div>
	<div class="row" style="border:2px solid black;">
	<div class="container">
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
			</ul>
		</div>
		<div class="col-8 containerInfo">
			<div class="infoBuku">
				<img src="img/buku.jpg" alt="Buku">
				<h3>Title Lorem Ipsum Dolor</h3>
				<p>By John Doe</p>
				<p>Categories : Lorem Ipsum Dolor</p>
				<div class="tombol">
					<button class="wishlist">Add to Wishlist</button>
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