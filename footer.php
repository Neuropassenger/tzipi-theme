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

<?php

if(pll_current_language() == 'he') {
	$lightboxes = get_children( array(
		'post_type'   => 'page',
		'post_parent' => 105
	) );
} else {
	$lightboxes = get_children( array(
		'post_type'   => 'page',
		'post_parent' => 19
	) );
}

$lc = array();

foreach( $lightboxes as $lightbox ){
	$lc[] = $lightbox->post_content;
}
?>

<section class="mobile-lightboxes">
	<a href="#mobile-donate-lightbox" data-lity>
		<div class="mobile-item-lightboxes mobile-donate-lightboxes">
			<svg class="donate-ic" width="24px" height="21px" viewBox="0 0 24 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="1-Home-English" transform="translate(-282.000000, -2695.000000)" stroke="#0e3059">
						<g id="Group-27" transform="translate(0.000000, 2655.000000)">
							<path d="M284.7223,42.7228464 C282.394065,45.1198502 282.457957,48.815231 284.7223,51.2122347 L293.913617,61 L303.104934,51.2122347 C305.369476,48.815231 305.43307,45.1198502 303.104934,42.7228464 C300.776798,40.4257179 296.986995,40.4257179 294.658859,42.7228464 L293.913617,43.5218477 L293.168375,42.7228464 C292.00381,41.5243446 290.471096,41.0249688 288.945338,41.0249688 C287.419579,41.0249688 285.886467,41.5243446 284.7223,42.7228464 Z" id="Shape"></path>
						</g>
					</g>
				</g>
			</svg>
			<h5><?php _e( 'Donate', 'tzipi' ); ?></h5>
		</div>
	</a>
	<div id="mobile-donate-lightbox" style="background:#fff" class="lity-hide">
		<p><?php echo $lc[2]; ?></p>
	</div>
	<a href="#mobile-volunteer-lightbox" data-lity>
		<div class="mobile-item-lightboxes mobile-volunteer-lightboxes">
			<svg width="32px" height="22px" viewBox="0 0 32 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="1-Home-English" transform="translate(-649.000000, -2698.000000)">
						<g id="Group-27" transform="translate(0.000000, 2655.000000)">
							<g id="Group-23" transform="translate(650.000000, 39.000000)">
								<path d="M12.44516,18.8575193 C12.36924,18.0636066 12.39836,17.5095422 12.39836,16.7840873 C12.77796,16.5954591 13.45812,15.3927701 13.57304,14.3767391 C13.87152,14.3535916 14.34212,14.0777906 14.47992,12.9888695 C14.55428,12.40427 14.25892,12.0752789 14.079,11.9718535 C14.56468,10.5884164 15.57348,6.30857692 12.21324,5.86631042 C11.86744,5.29106848 10.98188,5 9.83112,5 C5.22704,5.08027777 4.67168,8.29286611 5.681,11.9718535 C5.5016,12.0752789 5.20624,12.40427 5.28008,12.9888695 C5.4184,14.0777906 5.88848,14.3535916 6.18696,14.3767391 C6.30136,15.3922776 7.00856,16.5954591 7.3892,16.7840873 C7.3892,17.5095422 7.4178,18.0636066 7.34188,18.8575193 C6.43084,21.1772021 0.28392,20.5261149 0,25 L19.76,25 C19.4766,20.5261149 13.3562,21.1772021 12.44516,18.8575193 Z" id="Shape-Copy" stroke="#0e3059"></path>
								<text id="+" font-family="SimplerPro-Regular, SimplerPro" font-size="20" font-weight="normal" fill="#0e3059">
									<tspan x="18" y="19">+</tspan>
								</text>
							</g>
						</g>
					</g>
				</g>
			</svg>
			<h5><?php _e( 'Volunteer', 'tzipi' ); ?></h5>
		</div>
	</a>
	<div id="mobile-volunteer-lightbox" style="background:#fff" class="lity-hide">
		<p><?php echo $lc[1]; ?></p>
	</div>
	<a href="#mobile-subscribe-lightbox" data-lity>
		<div class="mobile-item-lightboxes mobile-subscribe-lightboxes">
			<svg width="37px" height="20px" viewBox="0 0 37 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="1-Home-English" transform="translate(-1022.000000, -2694.000000)" fill="#0e3059">
						<g id="Group-27" transform="translate(0.000000, 2655.000000)">
							<g id="Group-30" transform="translate(921.000000, 39.000000)">
								<g id="1492300244_Envelope" transform="translate(101.000000, 0.000000)">
									<g id="Layer_1">
										<path d="M35.3287982,0 L0.861678005,0 C0.373393802,0 0,0.371428571 0,0.857142857 L0,19.0857143 C0,19.6 0.402116402,20 0.919123205,20 L35.271353,20 C35.7883598,20 36.1904762,19.6 36.1904762,19.0857143 L36.1904762,0.857142857 C36.1904762,0.371428571 35.8170824,0 35.3287982,0 Z M35.5873016,19.2285714 L22.4323507,12.0285714 L35.6160242,0.914285714 L35.6160242,19.0857143 C35.6160242,19.1428571 35.6160242,19.1714286 35.5873016,19.2285714 Z M0.574452003,19.0857143 L0.574452003,0.914285714 L13.7581255,12.0285714 L0.603174603,19.2 C0.574452003,19.1714286 0.574452003,19.1142857 0.574452003,19.0857143 Z M18.2675737,14.7714286 C18.1814059,14.8571429 18.0090703,14.8571429 17.8941799,14.7714286 L1.06273621,0.571428571 L35.12774,0.571428571 L18.2675737,14.7714286 Z M14.2464097,12.4285714 L17.5495087,15.2285714 C17.7218443,15.3428571 17.9229025,15.4285714 18.0952381,15.4285714 C18.2962963,15.4285714 18.4973545,15.3714286 18.6409675,15.2285714 L21.9440665,12.4571429 L34.7830688,19.4285714 L1.37868481,19.4285714 L14.2464097,12.4285714 Z" id="Shape"></path>
									</g>
								</g>
							</g>
						</g>
					</g>
				</g>
			</svg>
			<h5><?php _e( 'Subscribe', 'tzipi' ); ?></h5>
		</div>
	</a>
	<div id="mobile-subscribe-lightbox" style="background:#fff" class="lity-hide">
		<p><?php echo $lc[0]; ?></p>
	</div>
</section>
<section class="mobile-social">
	<a href="<?php echo get_theme_mod( 'facebook_link' ); ?>"><div class="mobile-facebook">
			<i class="fa fa-facebook" aria-hidden="true"></i>
			<?php _e( 'Tzipi Hotovely', 'tzipi' ); ?>
		</div></a>
	<a href="<?php echo get_theme_mod( 'twitter_link' ); ?>"><div class="mobile-twitter">
			<i class="fa fa-twitter" aria-hidden="true"></i>
			@TzipiHotovely
		</div></a>
	<a href="<?php echo get_theme_mod( 'instagram_link' ); ?>"><div class="mobile-instagram">
			<i class="fa fa-instagram" aria-hidden="true"></i>
			<?php _e( 'Instagram', 'tzipi' ); ?>
		</div></a>
</section>
<section class="lightboxes desktop-lightboxes">
	<a href="#donate-lightbox" data-lity>
		<div class="item-lightboxes donate-lightboxes">
			<svg class="donate-ic" width="24px" height="21px" viewBox="0 0 24 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="1-Home-English" transform="translate(-282.000000, -2695.000000)" stroke="#fff">
						<g id="Group-27" transform="translate(0.000000, 2655.000000)">
							<path d="M284.7223,42.7228464 C282.394065,45.1198502 282.457957,48.815231 284.7223,51.2122347 L293.913617,61 L303.104934,51.2122347 C305.369476,48.815231 305.43307,45.1198502 303.104934,42.7228464 C300.776798,40.4257179 296.986995,40.4257179 294.658859,42.7228464 L293.913617,43.5218477 L293.168375,42.7228464 C292.00381,41.5243446 290.471096,41.0249688 288.945338,41.0249688 C287.419579,41.0249688 285.886467,41.5243446 284.7223,42.7228464 Z" id="Shape"></path>
						</g>
					</g>
				</g>
			</svg>
			<h5><?php _e( 'Donate', 'tzipi' ); ?></h5>
			<p><?php _e( 'Praesent pulvinar elit odio, eget convallis velit efficitur nec1', 'tzipi' ); ?></p>
		</div>
	</a>
	<div id="donate-lightbox" style="background:#fff" class="lity-hide">
		<p><?php echo $lc[2]; ?></p>
	</div>
	<a href="#volunteer-lightbox" data-lity>
		<div class="item-lightboxes volunteer-lightboxes">
			<svg width="32px" height="22px" viewBox="0 0 32 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="1-Home-English" transform="translate(-649.000000, -2698.000000)">
						<g id="Group-27" transform="translate(0.000000, 2655.000000)">
							<g id="Group-23" transform="translate(650.000000, 39.000000)">
								<path d="M12.44516,18.8575193 C12.36924,18.0636066 12.39836,17.5095422 12.39836,16.7840873 C12.77796,16.5954591 13.45812,15.3927701 13.57304,14.3767391 C13.87152,14.3535916 14.34212,14.0777906 14.47992,12.9888695 C14.55428,12.40427 14.25892,12.0752789 14.079,11.9718535 C14.56468,10.5884164 15.57348,6.30857692 12.21324,5.86631042 C11.86744,5.29106848 10.98188,5 9.83112,5 C5.22704,5.08027777 4.67168,8.29286611 5.681,11.9718535 C5.5016,12.0752789 5.20624,12.40427 5.28008,12.9888695 C5.4184,14.0777906 5.88848,14.3535916 6.18696,14.3767391 C6.30136,15.3922776 7.00856,16.5954591 7.3892,16.7840873 C7.3892,17.5095422 7.4178,18.0636066 7.34188,18.8575193 C6.43084,21.1772021 0.28392,20.5261149 0,25 L19.76,25 C19.4766,20.5261149 13.3562,21.1772021 12.44516,18.8575193 Z" id="Shape-Copy" stroke="#FFFFFF"></path>
								<text id="+" font-family="SimplerPro-Regular, SimplerPro" font-size="20" font-weight="normal" fill="#FFFFFF">
									<tspan x="18" y="19">+</tspan>
								</text>
							</g>
						</g>
					</g>
				</g>
			</svg>
			<h5><?php _e( 'Volunteer', 'tzipi' ); ?></h5>
			<p><?php _e( 'Praesent pulvinar elit odio, eget convallis velit efficitur nec2', 'tzipi' ); ?></p>
		</div>
	</a>
	<div id="volunteer-lightbox" style="background:#fff" class="lity-hide">
		<p><?php echo $lc[1]; ?></p>
	</div>
	<a href="#subscribe-lightbox" data-lity>
		<div class="item-lightboxes subscribe-lightboxes">
			<svg width="37px" height="20px" viewBox="0 0 37 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g id="1-Home-English" transform="translate(-1022.000000, -2694.000000)" fill="#FFFFFF">
						<g id="Group-27" transform="translate(0.000000, 2655.000000)">
							<g id="Group-30" transform="translate(921.000000, 39.000000)">
								<g id="1492300244_Envelope" transform="translate(101.000000, 0.000000)">
									<g id="Layer_1">
										<path d="M35.3287982,0 L0.861678005,0 C0.373393802,0 0,0.371428571 0,0.857142857 L0,19.0857143 C0,19.6 0.402116402,20 0.919123205,20 L35.271353,20 C35.7883598,20 36.1904762,19.6 36.1904762,19.0857143 L36.1904762,0.857142857 C36.1904762,0.371428571 35.8170824,0 35.3287982,0 Z M35.5873016,19.2285714 L22.4323507,12.0285714 L35.6160242,0.914285714 L35.6160242,19.0857143 C35.6160242,19.1428571 35.6160242,19.1714286 35.5873016,19.2285714 Z M0.574452003,19.0857143 L0.574452003,0.914285714 L13.7581255,12.0285714 L0.603174603,19.2 C0.574452003,19.1714286 0.574452003,19.1142857 0.574452003,19.0857143 Z M18.2675737,14.7714286 C18.1814059,14.8571429 18.0090703,14.8571429 17.8941799,14.7714286 L1.06273621,0.571428571 L35.12774,0.571428571 L18.2675737,14.7714286 Z M14.2464097,12.4285714 L17.5495087,15.2285714 C17.7218443,15.3428571 17.9229025,15.4285714 18.0952381,15.4285714 C18.2962963,15.4285714 18.4973545,15.3714286 18.6409675,15.2285714 L21.9440665,12.4571429 L34.7830688,19.4285714 L1.37868481,19.4285714 L14.2464097,12.4285714 Z" id="Shape"></path>
									</g>
								</g>
							</g>
						</g>
					</g>
				</g>
			</svg>
			<h5><?php _e( 'Subscribe', 'tzipi' ); ?></h5>
			<p><?php _e( 'Praesent pulvinar elit odio, eget convallis velit efficitur nec3', 'tzipi' ); ?></p>
		</div>
	</a>
	<div id="subscribe-lightbox" style="background:#fff" class="lity-hide">
		<p><?php echo $lc[0]; ?></p>
	</div>
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