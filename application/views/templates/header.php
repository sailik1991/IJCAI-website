
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="International Joint Conference on Artificial Intelligence, July 9–15, 2016, New York">
<meta name="keywords" content="IJCAI, 2016, artificial intelligence, conference, New York">

<title>IJCAI-16</title>

<link rel="icon" type="image/png" href="/img/ijcai-16-icon.png">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-2.1.4.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<style type="text/css">
	#footer {
    text-align: center;
    font-size: 0.8em;
    padding-top: 2px;
    padding-bottom: 12px;
	}
	/* Sticky footer styles
	-------------------------------------------------- */
	.footer {
	  position:relative;
	  bottom: 0px;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 30px;
	  padding-top: 5px;
	  background-color: #f5f5f5;
	}

	p {
		text-align: justify;
	}

	/* Custom page CSS
	-------------------------------------------------- */
	/* Not required for template or sticky footer method. */
</style>

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo site_url('welcome/view/home')?>">
	      	<img src="/img/ijcai-16-white.png" width=112 height=27>
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">

	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo site_url('welcome/view/call_for_papers')?>">Main track</a></li> 
	            <li><a href="<?php echo site_url('welcome/view/web_track')?>">Special track</a></li>
	            <li><a href="<?php echo site_url('welcome/view/workshops')?>">Workshops</a></li>
	            <li><a href="<?php echo site_url('welcome/view/tutorials')?>">Tutorials</a></li>
	            <li><a href="<?php echo site_url('welcome/view/call_for_awards')?>">Awards</a></li>
	          </ul>
	        </li>
	        
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Committees<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo site_url('welcome/view/confcommittee')?>">Conference</a></li>
	            <li><a href="<?php echo site_url('welcome/view/organizcommittee')?>">Organization</a></li>
	            <li><a href="<?php echo site_url('welcome/view/advisorycommittee')?>">Advisory</a></li>
	          </ul>
	        </li>

	        <li><a href="<?php echo site_url('welcome/view/sponsors')?>">Sponsors and exhibits</a></li>

	        <li><a href="<?php echo site_url('welcome/view/industry_day')?>">Industry day</a></li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">New York<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo site_url('welcome/view/newyork')?>">About NYC</a></li>
	            <li><a href="<?php echo site_url('welcome/view/ainyc')?>">AI in NYC</a></li>
	            <li><a href="<?php echo site_url('welcome/view/venue')?>">Conference Venue</a></li>
	          </ul>
	        </li>
	      </ul>

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="jumbotron container-fluid" style="background-image: url('/img/nyc-skyline.jpg'); background-size: cover;">
   		<div class="container">
   			<h1>25th International Joint Conference on Artificial Intelligence</h1>
   			<hr>
   			<h3><img src="/img/venue_icon.png" height="30px"></img> <b><u> New York City</b></u></h3>
   			<h3><img src="/img/time_icon.png" height="30px"> <b><u> 9th-15th July, 2016</b></u></h3>
   			<br><br>
   			<br><br>
   			<br><br><br><br><br><br>

   		</div>
	</div>

	<div class="col-lg-2">
	    <br/>
	    <center>
	    <a target="_blank" href="https://www.facebook.com/ijcai16"><img src="/img/facebook.png" alt="" /></a> 
	    <a target="_blank" href="https://twitter.com/ijcai16"><img src="/img/twitter.png" alt="" /></a>
	    </center>
	    <br>
	    <a class="twitter-timeline" href="https://twitter.com/ijcai16" data-widget-id="647162671855497216">Tweets by @ijcai16</a>
	   <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  	</div>

  	<div class="row">      
    	<div class="col-md-offset-1 col-lg-7">
