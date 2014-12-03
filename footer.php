	</section><!--/main-->
</div><!--/container-->

		

<footer role="contentinfo">
	<section class="row clearfix">

		<h1><span class="quote">&ldquo;</span>Cerca<span class="quote">&rdquo;</span></h1>
		<h2>Track #1 from the CutOuts EP, <strong>Cerca</strong>. <a href="https://cutoutsmusic.bandcamp.com/track/cerca" class="buy" target="_blank">Buy this Track &rarr;</a></h2>

		<div id="player" style="width: 100%; height: auto"></div>

		<p class="meta"><span class="copyright">&copy;<?php echo date('Y'); ?> Cutouts Music</span> &nbsp; <span class="socials">/ &nbsp; <a href="https://www.facebook.com/cutoutsmusic" target="_blank">Facebook</a> &nbsp; / &nbsp; <a href="https://soundcloud.com/cutouts" target="_blank">SoundCloud</a></span></p>
	
	</section>	
</footer>




<script src="<?php bloginfo('template_url'); ?>/js/responsive.js"></script> 

<script>
    (function() {
        var script = document.createElement("script");

        script.type = "text/javascript";
        script.async = true;
        script.src = "//sd.toneden.io/production/toneden.loader.js"

        var entry = document.getElementsByTagName("script")[0];
        entry.parentNode.insertBefore(script, entry);
    }());

    ToneDenReady = window.ToneDenReady || [];
    ToneDenReady.push(function() {
        // Modify the dom and urls parameters to position
        // your player and select tracks/sets/artists to play.
        ToneDen.player.create({
            dom: "#player",
            skin: "dark",
            urls: [
                "https://soundcloud.com/cutouts/cerca"
            ]
        });
    });
</script>


<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close button-close"> X </button>
			
			
			<article class="clearfix">
				<div class="hdr-about left"><h3>About</h3></div>
				<div class="desc-about right">
				<p><img class="alignright wp-image" src="<?php bloginfo('template_directory'); ?>/images/avatar.png" />THE CUTOUTS STARTED in 1999 as a pseudonymous home-recording project in a basement in Charlottesville. In 2002 The CutOuts collaborated with <a href="http://www.foolery.org/" target="_blank">Foolery</a> theater company to provide an ambient score to <a href="http://www.foolery.org/vassilisabrave.html" target="_blank">Vassilisa the Brave</a>. In 2004, a full-length CD of experimental music was released titled <em>After a Long Illness</em>.</p>  <p>The most recent EP titled <em>Cerca</em> replaces the pots and pans and cheap Casios with a single Telecaster, cello bow, and abundant natural reverb.</p>
				
				<a class="button" href="mailto:cutout@gmail.com">Contact Us</a>
				</div>
			
			</article>
			
					
		</div>
		
		
	
		<script src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/demo7.js"></script>
		
		
</body>
</html>