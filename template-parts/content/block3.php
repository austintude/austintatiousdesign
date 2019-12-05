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
					<?php while (have_rows('block3_sectioncards')) : the_row();
						//vars
						$sectioncard_id	= get_sub_field('sectioncard_id');
						$sectioncard_title	= get_sub_field('sectioncard_title');
						$sectioncard_services	= get_sub_field('sectioncard_services');
						$sectioncard_img	= get_sub_field('sectioncard_img');
						$sectioncard_link	= get_sub_field('sectioncard_link');
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
													$sectioncard_service	= get_sub_field('sectioncard_service');
												?>
                                               		<li class="">
														   <?php echo $sectioncard_service; ?>
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
								<?php endwhile; ?>

                    </div>
                </section>

