<?php
/**
 * Template part for displaying the custom header media
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! the_post_thumbnail() ) {
	return;
}

$top_block			= get_field('top_block');
$mid_block			= get_field('mid_block');
$btm_block			= get_field('btm_block');


?>
<?php the_title(); ?>
<?php the_content(); ?>
<figure class="header-image">
	<div class="aboutTextBlock">
	<div class="leftBlock">
		&nbsp;
	</div><!-- end .emptyBlock -->
	<div class="rightBlock">
		<div class="topBlock">
			<h1>
				<?php echo $top_block; ?>
			</h1>
		</div><!-- end .topBlock -->
		<div class="midBlock">
			<h2>
				<?php echo $mid_block; ?>
			</h2>
		</div><!-- end .midBlock -->
		<div class="btmBlock">
			<p>
				<?php echo $btm_block; ?>
			</p>
		</div><!-- end .lowerBlock -->
	</div><!-- end .rightBlock -->
</div><!-- end .aboutTextBlock -->

</figure><!-- .header-image -->
