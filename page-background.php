<?php
/*
Template Name: Bio
*/
?>

<?php get_header(); ?>

	</div>
	<div class="title-carousel about-title">
		<h1><?php _e( 'zipi hotoveli', 'tzipi' ); ?></h1>
		<h2><?php _e( 'Personal background', 'tzipi'); ?></h2>
	</div>

<?php
// Get images for the header slider from a gallery
$image = get_the_post_thumbnail_url();
$image_title = esc_html( get_the_title( get_post_thumbnail_id() ) );
$image_caption = esc_html( get_post( get_post_thumbnail_id() )->post_excerpt );
echo '<div class="about-header">';
echo '<img src="'.$image.'">';
echo '<div class="slide-caption about-header-caption">';
echo '<span class="title-slide">'.$image_title.'</span>';
echo '<span class="author-slide">'.$image_caption.'</span>';
echo '</div></div>';
?>

</header>
<section class="post-main-content">
	<article class="post-article post-article-about">
		<div class="post-content-wrapper">
			<div class="text-post text-about">

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();
						the_content();
					endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</article>
</section>

<?php get_footer(); ?>