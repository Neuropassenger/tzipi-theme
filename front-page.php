<?php get_header(); ?>

	</div>
	<div class="title-carousel">
		<h1><?php _e( 'tzipi hotovely', 'tzipi' ); ?></h1>
		<h2><?php _e( 'Fighting for Israel’s truth', 'tzipi' ); ?></h2>
	</div>
	<div class="controls-carousel">
		<div class="prev-btn-carousel">
			<img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg">
		</div>
		<div class="next-btn-carousel">
			<img src="<?php echo get_template_directory_uri(); ?>/img/next.svg">
		</div>
	</div>
    <div class="preloader-carousel-header">
        <div class="loader-inner"></div>
    </div>
    <div class="owl-carousel carousel-header" id="preowl">

<?php
// Get images for the header slider from a gallery
$carousel_header_images = get_post_gallery( get_the_ID(), false );
$ids = explode( ',', $carousel_header_images['ids'] );
for ( $i = 0; $i < count( $ids ); $i++ ) {
    $image = $carousel_header_images['src'][$i];
    $image_title = esc_html( get_the_title( $ids[$i] ) );
    $image_caption = esc_html( get_post( $ids[$i] )->post_excerpt );
    echo '<div class="slide-carousel owl-lazy" data-src="'.$image.'">';
    //echo '<img src="'.$image.'">';
    echo '<div class="slide-caption">';
    echo '<span class="title-slide">'.$image_title.'</span>';
    echo '<span class="author-slide">'.$image_caption.'</span>';
    echo '</div></div>';
}
?>

	</div>
</header>
<section class="main-content">
	<ul class="midmenu">

		<?php
        get_template_part( 'includes/class-walker-midmenu' );
        wp_nav_menu( array(
			'theme_location'  => 'links-midmenu',
			'container'       => '',
			'container_class' => '',
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '%3$s',
            'walker'          => new Walker_MidMenu()
		) ); ?>
	</ul>

	<ul class="mobile-midmenu">
        <?php wp_nav_menu( array(
        'theme_location'  => 'links-midmenu',
        'container'       => '',
        'container_class' => '',
        'before'          => '<svg class="arrow-mmm" id="Layer_1" style="enable-background:new 0 0 48 48;" version="1.1" viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polygon points="11.8,45.7 10.4,44.3 30.8,24 10.4,3.7 11.8,2.3 33.5,24  "/></g></svg>',
        'fallback_cb'     => 'wp_page_menu',
        'items_wrap'      => '%3$s',
        'walker'          => new Walker_Nav_Menu()
        ) ); ?>
	</ul>

    <!-- POSTS -->
    <?php get_template_part( 'template-parts/blog', 'home' ); ?>

</section>
<section class="social-feeds">
	<div class="facebook-social-feeds">
		<div class="header-social-feeds">
			<h4><?php _e( 'Facebook updates', 'tzipi' ); ?></h4>
			<a href="<?php echo get_theme_mod( 'facebook_link' ); ?>"><div class="facebook-follow"><i class="fa fa-facebook" aria-hidden="true"></i><?php _e( 'FOLLOW', 'tzipi' ); ?></div></a>
		</div>
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTzipiHotovely%2F&tabs=timeline&width=340&height=408&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="340" height="408" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	</div>
	<div class="twitter-social-feeds">
		<div class="header-social-feeds">
			<h4><?php _e( 'Twitter feed', 'tzipi' ); ?></h4>
			<a href="<?php echo get_theme_mod( 'twitter_link' ); ?>"><div class="twitter-follow"><i class="fa fa-twitter" aria-hidden="true"></i><?php _e( 'FOLLOW', 'tzipi' ); ?></div></a>
		</div>
		<a class="twitter-timeline" data-height="408" href="https://twitter.com/TzipiHotovely">Tweets by TzipiHotovely</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>
	<div class="instagram-social-feeds">
		<div class="header-social-feeds">
			<h4><?php _e( 'Instagram', 'tzipi' ); ?></h4>
			<a href="<?php echo get_theme_mod( 'instagram_link' ); ?>"><div class="instagram-follow"><i class="fa fa-instagram" aria-hidden="true"></i><?php _e( 'FOLLOW', 'tzipi' ); ?></div></a>
		</div>
		<!-- InstaWidget -->
		<a href="https://instawidget.net/v/user/tzipihotovely" id="link-762e28f20851c8ad8336b88ba3aa22f4310531aa2ee3f7534065f11f5065e8ee">@tzipihotovely</a>
		<script src="https://instawidget.net/js/instawidget.js?u=762e28f20851c8ad8336b88ba3aa22f4310531aa2ee3f7534065f11f5065e8ee&width=300px"></script>
	</div>
</section>

<?php get_footer(); ?>