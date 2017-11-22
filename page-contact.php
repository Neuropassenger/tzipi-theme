<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	</div>
	<div class="title-carousel contact-title">
		<h1><?php _e( 'Foreign deputy minister', 'tzipi' ); ?></h1>
		<h2><?php _e( 'contact us', 'tzipi' ); ?></h2>
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
<section class="contact-main-content">
	<div class="contacts">

        <?php
        $contacts = get_children( array(
                'post_type'     => 'page',
                'post_parent'   => get_the_ID()
        ) );

        $i = 0;
        foreach( $contacts as $contact ){
            $content = explode( "\n", $contact->post_content );

	        echo '<div class="item-contacts">';
	        echo '<h3>'.$content[0].'</h3>';
	        echo '<span class="contact1">'.$content[1].'</span>';
            echo '<span class="contact2">'.$content[2].'</span>';
	        echo '<span class="contact3">'.$content[3].'</span>';
	        echo '</div>';

	        $i ++;
        }

        for( $j = 8; $j > $i; $j-- ) {
	        echo '<div class="item-contacts">';
	        echo '</div>';
        }
        ?>

	</div>
	<div class="contacts-footer">
		<div class="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13566.284729597564!2d35.19403795659179!3d31.782179780476515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1502c45f7840ca41%3A0x8faa77aa79ca1391!2sMinistry+of+Foreign+Affairs!5e0!3m2!1sen!2s!4v1500484040101" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="contact-form">
			<h2><?php _e( 'Contact Us', 'tzipi' ); ?></h2>
			<form action="https://formspree.io/nimrod@levineux.com"
			      method="POST">
				<input type="text" name="name" placeholder="<?php _e( 'Full name', 'tzipi' ); ?>">
				<input type="email" name="_replyto" placeholder="<?php _e( 'Email', 'tzipi' ); ?>">
				<textarea name="message" placeholder="<?php _e( 'Message', 'tzipi' ); ?>"></textarea>
				<button type="submit" class="submit-btn"><span><?php _e( 'Submit', 'tzipi' ); ?></span></button>
			</form>
		</div>
	</div>
</section>

<?php get_footer(); ?>
