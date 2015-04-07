<!DOCTYPE HTML>
<html>
<head>
<title>WASTE - Waste Acquisition System Technological Enhancement</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
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

<link href="css/dashboard.css" rel="stylesheet" type="text/css" media="all" />
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
		        <li><a href="entry.html">Entri Sampah</a></li>
		        <li><a href="volumeTPS.html">Pengawasan Sampah</a></li>
		        <li class="active"><a href="dataPetugas.html">Administrasi Sampah</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
		<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Pengawasan Sampah</li>
		</ol>
	</div>
</div>
<div class="main"><!-- start main -->
<div class="container">
	<div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
		  <h2 class="sub-header">Administrasi</h2>
		  <h4>Disini anda bisa mengubah data TPS dan TPA, Petugas dan Admin</h4>
          <h2 class="sub-header">Menu</h2>
		  <a href="dataTP"><button style="margin-top:10px;" class="btn_style">TPS-TPA</button></a><br/>
		  <a href="dataPetugas"><button style="margin-top:10px;" class="btn_style">Petugas</button></a><br/>
		  <a href="dataAdmin.html"><button style="margin-top:10px;" class="btn_style">Admin</button></a><br/>
        </div>
        <div class="col-md-8">
          <!--<h1 class="page-header">Dashboard</h1>-->
          <h2 class="sub-header">Daftar Petugas Lapangan</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Peran</th>
                  <th>Manage...</th>
                </tr>
              </thead>
<?php $entry_num = 0; ?>
              <tbody>
				@foreach ($petugass as $petugas)
				<?php $entry_num += 1; ?>
				<tr>
					<td id="{{ 'real_id' . $entry_num }}" my_value="{{ $petugas->id }}">{{ $entry_num }}</td>
					<td id="{{ 'nip' . $entry_num }}">{{ $petugas->nip }}</td>
					<td id="{{ 'nama' . $entry_num }}">{{ $petugas->name }}</td>
					<td id="{{ 'peran' . $entry_num }}">{{ $petugas->role }}</td>
					<td><a href="#" class="editButt" id="{{ $entry_num }}">edit</a> | <a href="#" class="delButt" id="{{ $entry_num }}">delete</a></td>
				</tr>
				@endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<div class="floatEdit">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-3 popup">
				  <div class="contact-form">
				  	<h3>Edit Petugas</h3>
					    <form method="post" action="contact-post.html" id="submissionform">
							<input type="hidden" class="form-control" id="id" value="-diambil dynamically pake JS-" style="display:none;">
							<div>
						    	<span>NIP</span>
						    	<span><input type="text" class="form-control" id="nip" value="-diambil dynamically pake JS-"></span>
						    </div>
					    	<div>
						    	<span>Nama</span>
						    	<span><input type="text" class="form-control" id="nama" value="-diambil dynamically pake JS-"></span>
						    </div>
						    <div>
						    	<span>Peran</span>
						    	<span><input type="text" class="form-control" id="peran" value="-diambil dynamically pake JS-"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="submit" id="doSubmit"><input type="submit" value="cancel" id="cancelSubmit" style="margin-right: 20px;"></span>
						  </div>
					    </form>
				    </div>
				</div>
			</div>
		</div>
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
<script>

$(document).ready(function(){
    $(".editButt").click(function(){ //when edit button is pressed
		$("input#id").attr("value",$("#real_id"+$(this).attr('id')).attr('my_value'));
		$("input#nip").attr("value",$("#nip"+$(this).attr('id')).html());
		$("input#nama").attr("value",$("#nama"+$(this).attr('id')).html());
		$("input#peran").attr("value",$("#peran"+$(this).attr('id')).html());
        $(".popup").attr("style","display:block !important;"); // show popup
    });
	$("#cancelSubmit").click(function(event) { //cancel button on popup pressed
		event.preventDefault();
		$(".popup").attr("style","display:none !important;");
	});
	$("#doSubmit").click(function(event) { //submit button pressed
		event.preventDefault();
	
		//DO AJAX SUBMIT HERE (form#submissionform) K THX. - dalva
		$.ajax({
			url: 'dataPetugas/'+$("input#id").val(),
			type: 'PATCH',
			data: {	_token:	$('meta[name="csrf-token"]').attr('content'),
					nip:	$("input#nip").val(),
					name:	$("input#nama").val(),
					role:	$("input#peran").val()},
			success: function(result) {
				// Do something with the result
				window.location.href = result;
			}
		});
		
		$(".floatEdit").attr("style","display:none !important;"); // then hide the popup
	});
	$(".delButt").click(function(event){ //when delete button is pressed
		event.preventDefault();
		
		//DO AJAX DELETE HERE (form#submissionform) K THX. - dalva
		$.ajax({
			url: 'dataPetugas/'+$("#real_id"+$(this).attr('id')).attr('my_value'),
			type: 'DELETE',
			data: { _token: $('meta[name="csrf-token"]').attr('content') },
			success: function(result) {
				// Do something with the result
				window.location.href = result;
			}
		});
		
		alert("user ID " + $(this).attr('id') +" deleted.");
    });
});
</script>
</body>
</html>