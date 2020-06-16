<?php
/**
 * Template part for pricing template
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>

<section class="pricingBlock" id="portfolio">
<div class="sectionHeader">
                    <h2 class="serviceTitle">Austintatious Design Pricing </h2>
                    <div class="sectionDescription">
                        <p>These are just very loose guidelines that I go by. Thought maybe you would find this helpful.</p>
					</div>
</div>
                    <div class="sectionCardsBlock">
					<?php $servicepricesloop = new \WP_Query( array( 'post_type' => 'service_prices', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $servicepricesloop->have_posts() ) : $servicepricesloop->the_post();
$service_title	= get_field('service_title');
$service_level	= get_field('service_level');
$service_cta_txt	= get_field('service_cta_txt');
$service_cta_link	= get_field('service_cta_link');
$service_desc	= get_field('service_desc');
			?>

                            <div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
                                    <h2 class="sectionTitle"><amp-fit-text><?php echo $service_title; ?></amp-fit-text></h2>



												<?php while (have_rows('service_level')) : the_row();
													//vars
													$service_level_title	= get_sub_field('service_level_title');
													$service_level_price	= get_sub_field('service_level_price');
												?>
													<div class="priceTable">
														<div class="leftCell">
														<amp-fit-text>
															<?php echo $service_level_title; ?>
															</amp-fit-text>
														</div>
														<div class="rightCell">
														<amp-fit-text>
															<?php echo $service_level_price; ?>
															</amp-fit-text>
														</div>
													</div>
												<?php endwhile; ?>




                    </div>
					<?php endwhile;  wp_reset_query(); ?>
					</div>
                </section>

