<?php
/**
 * Template part for ctaHero
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>
<?php $ctalinksloop = new \WP_Query( array( 'post_type' => 'cta_links', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $ctalinksloop->have_posts() ) : $ctalinksloop->the_post();
$ctahero_cta_text	= get_field('ctahero_cta_text');
$ctahero_cta_url	= get_field('ctahero_cta_url');
$cta_loading_image	= get_field('cta_loading_image');
?>
	<div class="ctaHero">

		<div class="ctaButtonLink">
			<button class="btn btn-lg btn-danger" on="tap:my-lightbox" role="button" tabindex="0"><?php echo $ctahero_cta_text; ?> »</button>
			<amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">

      <amp-iframe width="350" height="600" layout="fixed"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $ctahero_cta_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
		</div><!-- ctaButton -->
		</div><!-- ctaHero -->
		<?php endwhile; wp_reset_query(); ?>

