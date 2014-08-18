<?php
/**
 * The footer template file.
 * @package SocialSparks
 * @since SocialSparks 1.0.0
*/
?>
<div id="footer-boxes" class="container">
	    <div class="col-md-2 col-md-offset-1 footer-box">
			<div class="vcard">
				<p class="fn"><a class="url" href="#">Phillip Dews</a></p>
				<p class="adr">
					<span class="comp-name">BRUM DESIGN</span><br />
					<span class="street-address">46 Thornley Grove</span><br />
					<span class="region">Minworth</span><br />
					<span class="city">BIRMINGHAM</span><br />
					<span class="postal-code">B76 9RH</span><br />
					<span class="country-name">Great Britain</span>
				</p>
				<p class="tel">+44 (0)121 439 9905</p>
			</div>
		</div>
		<div class="col-md-3 col-md-offset-1 footer-box">
			Welcome to the Social Sparks theme. This is a responsive WordPress theme built specifically for BRUM DESIGN. 
			Social Sparks is built on Bootstrap 3 and uses HTML5 and CSS3. Social Sparks is available for free download on
			the <a href="#" target="_blank" title="WordPress Repository">WordPress Repository</a> and 
			<a href="https://github.com/PhillipDewsDeveloper/SocialSparks" target="_blank" title="WordPress Repository">Github</a>.
	    </div>
		<div class="col-md-3 col-md-offset-1">
			<div class="footer-box-map">
				<iframe width='400px' height='210px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/brumdesign.j8l1dilm/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiYnJ1bWRlc2lnbiIsImEiOiJmVFF5S0djIn0.xhimN6rHh_U9cQI7c1-oHQ'></iframe>
		    </div>
		</div>
</div>
<div id="footerGap" class="container"></div>
<div id="bottom-navigation-wrapper">
	<div class="col-md-10 col-md-offset-1"><p class = "navbar-text pull-left">Social Sparks Theme built By <a href="http://www.brumdesign.uk" rel="dofollow" target="_blank">Phillip Dews</a> &copy 2014 | <a href="http://www.brumdesign.uk/sitemap_index.xml" target="_blank">Sitemap</a> | <a href="http://www.brumdesign.uk/privacy-policy/">Privacy Policy</a></p></div>
</div>
<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src = "<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<?php wp_footer(); ?>
    </body>
</html>