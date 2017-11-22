<?php get_header(); ?>

</header>
<section class="post-main-content">
	<article class="post-article">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<div class="meta-post">
					<span class="date-meta-post"><?php the_time('F j, Y'); ?></span>
					<span class="point-text-article point-post"></span>
					<span class="cat-meta-post"><?php the_category( ',' ) ?></span>
				</div>

					<?php
					// Get a thumbnail
					$code = get_the_post_thumbnail();
					if( !stristr( $code, '</iframe>' ) && get_the_post_thumbnail_url() != null ) {
						$code = '<div class="img-wrapper">';
					    $code .= '<img src="'.get_the_post_thumbnail_url().'">';
					} elseif ( stristr( $code, '</iframe>' ) ) {
						$iframe = '<iframe';
						preg_match_all( "@<iframe(.*?)</iframe>@", $code, $matches );
						$iframe .= $matches[1][0];
						$iframe .= '</iframe>';
						$code = '<div class="img-wrapper">';
						$code .= $iframe;
					} else {
					    $code = '<div class="img-wrapper" style="display: none">';
                    }
					echo $code;
					$image_caption = esc_html( get_post( get_post_thumbnail_id() )->post_excerpt );
					?>

					<span class="photo-author"><?php echo $image_caption; ?></span>
				</div>
				<div class="post-content-wrapper">
					<div class="text-post">

						<?php the_content(); ?>

					</div>
				</div>


			<?php endwhile; ?>
		<?php endif; ?>

	</article>
</section>

<?php get_footer(); ?>