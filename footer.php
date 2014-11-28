	</section><!--/main-->
</section><!--/container-->


<footer role="contentinfo">
	
	<?php if (function_exists('dynamic_sidebar')) { ?>
    	<section class="row clearfix">
    		<?php dynamic_sidebar('Footer Widgets'); ?>
    	</section>
    <?php } ?>
	
	
	<section class="footer-wrap">
		<section class="row clearfix">
  			<div id="player" style="width: 100%; height: 260px;"></div>

		</section>	
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