<div class="content-wrapper">

    <?php
    $post_count = get_option('posts_per_page');
    $i = 0;

    $args = array(
	    'posts_per_page' => $post_count,
	    'ignore_sticky_posts' => 1,
	    'paged' => get_query_var('paged') ?: 1
    );
    $wp_query = new WP_Query( $args );

    if ( $wp_query->have_posts() ) :
    while ( $wp_query->have_posts() ) : $wp_query->the_post();
    if($i == $post_count) {
        break;
    } else {
        $i++;
    }

	// Get a thumbnail
	$code = get_the_post_thumbnail();
	$empty_thumbnail_flag = false;
	// IMAGE
	if( !stristr( $code, '</iframe>' ) && get_the_post_thumbnail_url() != null ) {
		$code = '<div class="video-article" style="background-image: url('.get_the_post_thumbnail_url().'); background-size: cover; background-position-x: center;"><a class="click-thumb" href="'.get_the_permalink().'"></a></div>';
		// VIDEO
	} elseif ( stristr( $code, '</iframe>' ) ) {
		$iframe = '<iframe';
		preg_match_all( "@<iframe(.*?)</iframe>@", $code, $matches );
		$iframe .= $matches[1][0];
		$iframe .= '</iframe>';
		$code = '<div class="video-article">';
		$code .= $iframe.'</div>';
		// NOTHING
	} else {
		$code = '<div class="video-article" style="display: none"></div>';
		$empty_thumbnail_flag = true;
	}
	?>

    <article class="article-content">
		<?php if( $empty_thumbnail_flag == false ) {
			echo '<div class="text-article">';
		} else {
			echo '<div class="text-article" style="width: 100%; max-width: none;">';
		}
		?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_excerpt(); ?>
        <div class="meta-text-article">
            <span class="date-article"><?php the_time('F j, Y'); ?></span>
            <span class="point-text-article"></span>
            <span class="cat-article"><?php the_category( ',' ) ?></span>
        </div>
    </div>

        <?php echo $code; ?>

    </article>

<?php endwhile; ?>
<?php endif; ?>

<div class="posts-navigation">
<?php
posts_nav_link();
wp_reset_query();
?>
</div>

</div>