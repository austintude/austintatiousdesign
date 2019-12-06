<?php
/**
 * Template part for displaying a post's title
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$youtube_link = get_field('youtube_link');


if ( is_singular( get_post_type() ) ) {
	the_title( '<h1 class="entry-title">', '</h1>' );
	?>
	<?php if( $youtube_link ): ?>
	<amp-youtube width="480"
	height="270"
	layout="responsive"
	data-videoid="<?php echo $youtube_link; ?>"
	>
  </amp-youtube>
  <?php else : ?>
		<?php if ( has_post_thumbnail('') ) { //check for feature image}
                $post_thumbnail = get_the_post_thumbnail_url();
                ?>
                <amp-img itemprop="image" width="300" height="230" src="<?php echo $post_thumbnail; ?>" alt="Austintatious Design and: <?php the_title(''); ?>" class="" layout="responsive"></amp-img>

                <?php } ?>

<?php endif; ?>
  <?php
} else {
	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	?>
	<?php if( $youtube_link ): ?>
	<amp-youtube width="480"
	height="270"
	layout="responsive"
	data-videoid="<?php echo $youtube_link; ?>"
	>
  </amp-youtube>


<?php endif; ?>
  <?php
}
