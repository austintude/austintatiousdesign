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
