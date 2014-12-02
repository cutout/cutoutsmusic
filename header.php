<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
	The CutOuts
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" media="all" />

<script src="//use.typekit.net/jut0rqz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</head>
<body <?php body_class('loading'); ?>>


<!--<button class="pause">Pause</button>

<script>var video=document.getElementById("bgvid"),pauseButton=document.querySelector(".pause");function vidFade(){video.classList.add("stopfade");}
video.addEventListener('ended',function()
{video.pause();vidFade();},false);pauseButton.addEventListener("click",function(){video.classList.toggle("stopfade");if(video.paused){video.play();pauseButton.innerHTML="Pause";}else{video.pause();pauseButton.innerHTML="Paused";}},false);video.addEventListener('touchstart',function(e){e.preventDefault();video.play();})</script>
-->



	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/overlay.css">
  		<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
  		

<div class="container">

<video autoplay="" loop="" poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid">
<source src="http://demosthenes.info/assets/videos/polina.mp4" type="video/mp4">
</video>



	<button id="trigger-overlay" class="button-who" type="button">?</button>
		


	<section class="main clearfix">