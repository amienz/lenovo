<!DOCTYPE html>
<html lang="en">
<head>
  <title>AME Developer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
  <script src="bootstrap-3.3.7-dist/js/jquery-3.0.0.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="cob.css">
</head>
<body>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-12">
	<nav class="nav navbar navbar-default navbar-fixed-top" style="width:80%;margin-left:10%;">
		<div class="navbar-header"><a class="navbar-brand" href="#">AMIENZ</a></div>
	<nav class="nav navbar navbar-inverse navbar-fixed-top" style="width:80%;margin-left:10%;">
		<div class="navbar-header"><a class="navbar-brand" href="#">AMIENZ</a></div>
			<ul class="nav navbar-nav">
				<li class="dropdown"><a href="#">TV Series
					<ul class="dropdown-menu">
						<li style="margin-top:-10px;"><a href="#">Ongoing</a></li>
						<li><a href="#">End</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#">Movie
					<ul class="dropdown-menu">
						<li style="margin-top:-10px;"><a href="#">Ongoing</a></li>
						<li><a href="#">End</a></li>
					</ul>
				</li>
				<li><a data-toggle="dropdown" href="#">HOT</a></li>
				<li><a data-toggle="dropdown" href="#">News</a></li>
				<li><a data-toggle="dropdown" href="#">About</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li style="margin-right:10px;"><a href="#" data-toggle="modal" data-target="#mymodal">
				<span class="glyphicon glyphicon-user"></span>Log In</a></li>
			</ul>			
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search . .">
				</div>
			</form>
	</nav>
	</div>
<br><br><br>
</div>
</div>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-2">
		<div class="well well-sm" style="background-color:#94f7f4;">
			<h4><center>Review Manga</center></h4>
		</div>
		<div class="well well-sm" style="background-color:#94f7f4;">	
			<ul style="list-style-type:none;">
				<li><a href="#"><h5>Naruto chapter 500</a></h5></li>
				<li><a href="#"><h5>Black Clover chapter 195</a></h5></li>
				<li><a href="#"><h5>Boruto chapter 98</a></h5></li>
				<li><a href="#"><h5>One Piece chapter 501</a></h5></li>
				<li><a href="#"><h5>Fairy Tail chapter 195</a></h5></li>
				<li><a href="#"><h5>Dragon Ball ZGT chapter 182</a></h5></li>
				<li><a href="#"><h5>Haikyuu chapter 205</a></h5></li>
				<li><a href="#"><h5>Nanatsu No Taizai chapter 250</a></h5></li>
				<li><a href="#"><h5>Attack On Titan chapter 350</a></h5></li>
				<li><a href="#"><h5>My Hero Academia chapter 390</a></h5></li>
				<li><a href="#"><h5>The Promised Neverland chapter 50</a></h5></li>
		</div>		
				
	</div>
	 <div style="margin-right:-650px;margin-top:25px;" id="mymodal" class="modal fade form-group login" role="dialog">
						<div class="modal-dialog" style="padding-left:250px;">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2><center> Log In </center></h2><br>
									<div class="modal-body" style="width:300px;">
										<input type="text" class="form-control" name="ID" placeholder="ID ..">
										<br>
										<input type="password" class="form-control" name="Password" placeholder="Password ..">
										<br>
										<input type="submit" class="form-control btn btn-success" value="Log In">
										<br>
										<i><a href="#">lupa password ?</a></i>
									</div>
								</div>
							</div>
						</div>
	</div>
	<div id="myCarousel" class="carousel slide col-sm-8">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		
	 <!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="gambar/itachi2.jpg" class="img-rounded " alt="itachi">
			<div class="carousel-caption">
				<h3>Itachi</h3>
				<p>The hero of the darkness become a legend</p>
			</div>
		</div>
	
		<div class="item">
			<img src="gambar/narusasu2.jpg" class="img-rounded " alt="narusasu">
				<div class="carousel-caption">
					<h3>Last Battle</h3>
					<p>The Final battle on naruto shippuden (naruto vs sasuke)</p>
				</div>
		</div>
	
		<div class="item">
			<img src="gambar/saske2.jpg" class="img-rounded " alt="saske">
				<div class="carousel-caption">
					<h3>Saske</h3>
					<p>Mangekyou sharingan for activated susanoo level 3</p>
				</div>
		</div>
		
	</div>
	
	<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="margin-left:14px;">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="margin-right:14px;">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
	
	<div class="col-sm-2">
		<div class="thumbnail">
			<a href="gambar/trio.jpg" target="_blank">
				<img src="gambar/trio.jpg" alt="trio" style="width:170px;height:100px">
				<div class="caption">
					<p><center>One Piece Episode 504</center></p>
				</div>
			</a>
		</div>
    </div>
	
	<div class="col-sm-2">
		<div class="thumbnail">
			<a href="gambar/shika.jpg" target="_blank">
				<img src="gambar/shika.jpg" alt="trio" style="width:170px;height:100px">
				<div class="caption">
					<p><center>Naruto OVA 11</center></p>
				</div>
			</a>
		</div>
    </div>
	
	<div class="col-sm-2">
		<div class="thumbnail">
			<a href="gambar/finral.jpg" target="_blank">
				<img src="gambar/finral.jpg" alt="trio" style="width:170px;height:100px">
				<div class="caption">
					<p><center>Black Clover Episode 75</center></p>
				</div>
			</a>
		</div>
    </div>
	
</div>
</div>
<div class="container-fluid">
<div class="row">

	<div class="col-sm-12" style="background: black;padding:5px;">		
	<div class="col-sm-12" style="background: linear-gradient(to bottom, #003366 0%, #ffffff 100%);">		
		<center>
			<h2><p>@2019 by AMEdeveloper</h2></p>
			<p>IG : amienz0 | FB : Amin Wahit | Twitter : Amienz17</p>
			<h4>Good game</h4>
		</center>
	</div>
	</div>
</div>
</div>