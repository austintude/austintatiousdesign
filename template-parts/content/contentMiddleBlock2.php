<?php
/**
 * Template part for contentMiddleBlock2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block5_cta_text	= get_field('block5_cta_text');
$block5_cta_url	= get_field('block5_cta_url');
$cta_block_title	= get_field('cta_block_title');
$cta_loading_image	= get_field('cta_loading_image');

?>
	<div class="contentMiddleBlock2">
		<div class="contentMiddleBlockTitle">
		<?php echo $cta_block_title; ?>
		</div><!-- end .contentMiddleBlockTitle -->

		<div class="contentMiddleBlockcontent">
		<div class="ctaButtonLink">
			<button class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0"><?php echo $block5_cta_text; ?> »</button>
			<amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">

      <amp-iframe width="350" height="600" layout="fixed"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $block5_cta_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
		</div><!-- ctaButton -->
	</div><!-- end .contentMiddleBlockcontent -->

	</div><!-- end .contentMiddleBlock -->

