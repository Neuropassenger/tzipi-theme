<section class="youtube-feed">
	<div class="header-youtube-feed">
		<a href="<?php echo get_theme_mod( 'youtube_link' ); ?>">
			<div class="youtube-btn">
				<i class="fa fa-youtube-play icon-youtube-btn" aria-hidden="true"></i>
				<span>YouTube</span>
			</div>
		</a>
		<h4><?php _e( 'Join Tzipi Hotovely’s Youtube Channel', 'tzipi' ); ?></h4>
	</div>
	<div class="botborder-youtube-feed"></div>

	    <?php if ( is_active_sidebar( 'youtube-channel' ) ) : ?>
            <div id="youtube-channel">
			    <?php dynamic_sidebar( 'youtube-channel' ); ?>
            </div>
	    <?php endif; ?>

</section>
<footer class="page-footer">
	<ul class="social-footer">
		<li><a href="<?php echo get_theme_mod( 'youtube_link' ); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
		<li><a href="<?php echo get_theme_mod( 'instagram_link' ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		<li><a href="<?php echo get_theme_mod( 'facebook_link' ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a href="<?php echo get_theme_mod( 'pinterest_link' ); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
		<li><a href="<?php echo get_theme_mod( 'twitter_link' ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li><a href="<?php echo get_theme_mod( 'whatsapp_link' ); ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
	</ul>
	<ul class="footermenu">
		<?php wp_nav_menu( array(
			'theme_location'  => 'links-footermenu',
			'container'       => '',
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '%3$s'
		) ); ?>
	</ul>
	<p><?php _e( 'All rights reserved. Zipi Hotoveli. Copyright, 2017.', 'tzipi' ); ?></p>
</footer>
<footer class="mobile-page-footer">
	<p><?php _e( 'All rights reserved. Zipi Hotoveli. Copyright, 2017.', 'tzipi' ); ?></p>
</footer>

<?php wp_footer(); ?>

</body>
</html>