<?php
/**
 * Template Name: Pricing Page Template
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header('custom');

wp_rig()->print_styles( 'wp-rig-content' );

?>

	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			the_content();
		}

		get_template_part( 'template-parts/content/pricing-block' );

		?>
	</main><!-- #primary -->
	<?php
					get_template_part( 'template-parts/content/contentMiddleBlock2' );
			?>
<?php
get_footer();
