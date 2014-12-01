	</section><!--/main-->
</section><!--/container-->

<footer role="contentinfo">
	<section class="row clearfix">

		<h1><span class="quote">&ldquo;</span>Moon Dials<span class="quote">&rdquo;</span></h1>
		<h2>From the upcoming CutOuts EP, <strong>Cerca</strong>. <a href="#" class="buy" target="_blank">Buy this Track &rarr;</a></h2>

		<div id="player" style="width: 100%; height: auto"></div>

		<p class="meta"><span class="copyright">&copy;<?php echo date('Y'); ?> Cutouts Music</span> &nbsp; <span class="socials">/ &nbsp; <a href="https://www.facebook.com/cutoutsmusic" target="_blank">Facebook</a> &nbsp; / &nbsp; <a href="https://soundcloud.com/cutouts" target="_blank">SoundCloud</a></span></p>
	
	</section>	
</footer>

<?php wp_footer(); ?>

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
                "https://soundcloud.com/cutouts/wje"
            ]
        });
    });
</script>

</body>
</html>