<!DOCTYPE HTML>
<html>
<head>
<title>WASTE - Waste Acquisition System Technological Enhancement</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--  webfonts  -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- // webfonts  -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="header_bg"><!-- start header -->
	<div class="container">
		<div class="row header">
		<nav class="navbar" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" class="img-responsive"/> </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		        <li><a href="index.html">home</a></li>
		        <li class="active"><a href="entry.html">Entri Sampah</a></li>
		        <li><a href="volumeTPS.html">Pengawasan Sampah</a></li>
		        <li><a href="dataTP.html">Administrasi Sampah</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
		<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Entri Sampah</li>
		</ol>
	</div>
</div>
<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact"><!-- start contact -->				
				<div class="col-md-4">
					<div class="contact_info">
			    	 	<h2>Tambah Volume Sampah</h2>
						<img src="images/add.png" width="100%" alt="add"/>
				   </div>
				</div>				
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h3>Tambahkan volume sampah di form ini.</h3>
					    <form method="post" action="entry/store">
						<input name="_token" type="hidden" value="{{ csrf_token() }}">
					    	<div>
						    	<span>TPS/TPA</span>
						    	<span> 
									<select class="form-control" id="TPtype">
									  <option value="TPS">Tempat Pembuangan Sampah</option>
									  <option value="TPA">Tempat Pembuangan Akhir</option>
									</select> 
								</span>
						    </div>
						    <div>
						    	<span>Nama Lokasi</span>
						    	<span> 
									
									<select class="form-control" name="tps_id" id="lokasi"> <!--note: dynamically loaded with AJAX-->
									  @foreach ($tpsampahs as $tpsampah)
										<option value="{{ $tpsampah->id }}">{{ $tpsampah->name }}</option>
									  @endforeach
									</select> 
								</span>
						    </div>
						    <div>
						     	<span>Volume</span>
						    	<span><input name="volume" type="text" class="form-control" id="volume"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>
</div>
<div class="footer_btm"><!-- start footer_btm -->
	<div class="container">
		<div class="row  footer1">
			<div class="col-md-5">
				<div class="soc_icons">
					<ul class="list-unstyled">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
						<div class="clearfix"></div>
					</ul>	
				</div>
			</div>
			<div class="col-md-7 copy">
				<p class="link text-right"><span>&#169; WASTE - All rights reserved</span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>