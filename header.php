<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
	<?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'bolt' ), max( $paged, $page ) );
	?>
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

<video autoplay="" loop="" poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid">
<source src="http://demosthenes.info/assets/videos/polina.mp4" type="video/mp4">
</video>


<!--<button class="pause">Pause</button>

<script>var video=document.getElementById("bgvid"),pauseButton=document.querySelector(".pause");function vidFade(){video.classList.add("stopfade");}
video.addEventListener('ended',function()
{video.pause();vidFade();},false);pauseButton.addEventListener("click",function(){video.classList.toggle("stopfade");if(video.paused){video.play();pauseButton.innerHTML="Pause";}else{video.pause();pauseButton.innerHTML="Paused";}},false);video.addEventListener('touchstart',function(e){e.preventDefault();video.play();})</script>
-->


<section class="container">

	<header class="masthead clearfix" role="banner">
		<section class="row">
			<div class="branding">
	     		<h1 class="logo">
	    		    <a href="<?php echo home_url(); ?>/" title="<?php _e('Home','bolt'); ?>">
	     		    	<?php bloginfo('name'); ?>
	      		    </a>
	      		</h1>
	      	</div>
		</section>
		 
		<!--<button id="nav-toggle" aria-hidden="true">Navigation</button>

		<div class="nav-bg">
		    <nav class="menu clearfix">
				<?php wp_nav_menu( array('menu' => 'top_menu', 'menu_class' => 'nav clearfix row' )); ?>
			</nav>
		</div>
		<div class="overlay" aria-hidden="true"></div>
		
		-->
	</header>


	<section class="main clearfix">