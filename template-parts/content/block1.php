<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block1_sectioncards	= get_field('block1_sectioncards');


?>

<section class="block1" id="introduction">
	<div class="sectionHeader">
					<h2 class="serviceTitle" id="services">Services</h2>
</div>

                    <div class="sectionCardsBlock">
					<?php $servicesloop = new \WP_Query( array( 'post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $servicesloop->have_posts() ) : $servicesloop->the_post();
$sectioncard_id	= get_field('sectioncard_id');
$sectioncard_title	= get_field('sectioncard_title');
$sectioncard_content	= get_field('sectioncard_content');
$sectioncard_link	= get_field('sectioncard_link');
$sectioncard_link_text	= get_field('sectioncard_link_text');
			?>


                        <div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
                            <h3 class="mb1"><?php echo $sectioncard_title; ?></h3>

                            <p class="mb1"><?php echo $sectioncard_content; ?></p>
                            <div class="ctaButton"><a
                                    class="ampstart-btn caps text-decoration-none inline-block"
                                    href="<?php echo $sectioncard_link; ?>"
									aria-label="Link to learn more about <?php echo $sectioncard_title; ?>">
										<?php echo $sectioncard_link_text; ?>
									</a>
								</div>
						</div>
						<?php endwhile;  wp_reset_query(); ?>



                    </div>
                </section>
