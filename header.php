<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<ul class="mobile-navigation">
	<li class="close-mobilemenu">&times;</li>
	<?php
    // Вывод мобильного меню
	if( has_nav_menu('links-mobilemenu') ) {
		wp_nav_menu( array(
			'theme_location'  => 'links-mobilemenu',
			'container'       => 'div',
			'container_class' => 'links-mobilemenu',
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '%3$s'
		) );
	}
    ?>
	<div class="social-mobilemenu">
        <li><a href="<?php echo get_theme_mod( 'youtube_link' ); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        <li><a href="<?php echo get_theme_mod( 'instagram_link' ); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="<?php echo get_theme_mod( 'facebook_link' ); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="<?php echo get_theme_mod( 'twitter_link' ); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <?php
        // Вывод переключателя языков для мобилок
        if ( function_exists( 'pll_the_languages' ) ) {
            pll_the_languages( array( 'hide_current'  => 1 ) );
        }
        ?>
	</div>
</ul>
<header>
	<div class="topmenu">
		<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
		<div class="title-topmenu">
            <a href="<?php echo home_url(); ?>">
                <span class="part1-tt"><?php _e( 'Tzipi Hotovely', 'tzipi' ); ?></span>
                <div class="point-topmenu"></div>
                <span class="part2-tt"><?php _e( 'Deputy Foreign Minister', 'tzipi' ); ?></span>
            </a>
		</div>
		<ul class="navigation">
            <?php
            if( has_nav_menu('links-topmenu') ) {
	            wp_nav_menu( array(
		            'theme_location'  => 'links-topmenu',
		            'container'       => 'div',
		            'container_class' => 'links-topmenu',
		            'fallback_cb'     => 'wp_page_menu',
		            'items_wrap'      => '%3$s'
	            ) );
            }
            ?>
			<div class="social-topmenu">
				<li><a href="<?php echo get_theme_mod( 'youtube_link' ); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo get_theme_mod( 'instagram_link' ); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo get_theme_mod( 'facebook_link' ); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo get_theme_mod( 'twitter_link' ); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <?php
				// Вывод переключателя языков для десктопов
				if ( function_exists( 'pll_the_languages' ) ) {
					pll_the_languages( array( 'hide_current'  => 1 ) );
				}
				?>
			</div>
		</ul>
		<a href="#" class="hamburger">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</a>