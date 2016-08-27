<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?> | Epsilon</title>
	<link rel="icon" href="<?php base_url(); ?>/images/logofinal.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>/webroot/frontend/bootstrap/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="<?php echo base_url();?>/webroot/frontend/bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="<?php echo base_url();?>/webroot/frontend/font-awesome-4.6.3/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/webroot/frontend/css/style.css">
</head>
<body>
<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="home">EPSILON 2K17</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url();?>about">ABOUT US</a></li>
					<li><a href="<?php echo base_url();?>events">EVENTS</a></li>
					<li><a href="<?php echo base_url();?>clg_registration">REGISTER</a></li>
					<li><a href="<?php echo base_url();?>sponsors">SPONSORS</a></li>
					<li><a href="<?php echo base_url();?>contact">CONTACT US</a></li>
					<li><a href="<?php echo base_url();?>ep_2k16">EPSILON 2K16</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>