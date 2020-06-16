<?php
/**
 * Template part for front-page block3
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block3_sectioncards	= get_field('block3_sectioncards');


?>

<section class="block3" id="portfolio">
<div class="sectionHeader">
                    <h2 class="serviceTitle">Portfolio</h2>
                    <div class="sectionDescription">
                        <p>Check out some of our more recent projects. Click the link to see them in action.</p>
					</div>
</div>
                    <div class="sectionCardsBlock">
					<?php $portfolioloop = new \WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'post_id', 'order' => 'DSC' ) ); ?>

<?php while( $portfolioloop->have_posts() ) : $portfolioloop->the_post();
$sectioncard_id	= get_field('sectioncard_id');
$sectioncard_title	= get_field('sectioncard_title');
$sectioncard_services	= get_field('sectioncard_services');
$sectioncard_company	= get_field('sectioncard_company');
$sectioncard_img	= get_field('sectioncard_img');
			?>

                            <div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
                                    <h3 class=""><?php echo $sectioncard_title; ?></h3>

                                    <amp-img src="<?php echo $sectioncard_img['url']; ?>" width="1000"
                                        height="800" layout="responsive" alt="<?php echo $sectioncard_img['alt']; ?>" class=""></amp-img><br>
                                    <amp-accordion layout="container" disable-session-states class="">
                                        <section>
                                            <header>Services provided include:</header>
                                            <ul class="">
												<?php while (have_rows('sectioncard_services')) : the_row();
													//vars
													$sectioncard_service_provided	= get_sub_field('sectioncard_service_provided');
												?>
                                               		<li class="">
														   <?php echo $sectioncard_service_provided; ?>
													</li>
												<?php endwhile; ?>
                                            </ul>
                                            </header>
                                        </section>
                                    </amp-accordion>
                                    <br>

                                    <div class="ctaButton"><a
                                            class="ampstart-btn caps text-decoration-none inline-block"
                                            href="<?php echo $sectioncard_link; ?>">See it live</a></div>
								</div>
								<?php endwhile;  wp_reset_query(); ?>

                    </div>
                </section>

