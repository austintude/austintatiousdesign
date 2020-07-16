<?php
/**
 * Template part for front-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block1_sectioncards	= get_field('block1_sectioncards');


?>

<section class="subBlock1" id="inTheNews">
	<div class="sectionHeader">

					<h2 class="serviceTitle" id="accomplishments">In The News</h2>
</div>
<amp-accordion layout="container" disable-session-states="" class="inTheNEwsAccordion">
					<section id="seeMore-expanded">
						<h4 class="" role="button" aria-controls="97_AMP_content_0" aria-expanded="false" tabindex="0">
							<span class="show-more">
								Check out our latest accomplishments!
							</span>
							<span class="show-less">
								See Less!
							</span>
</h4>
						<figure class="inTheNEwsAccordionOpen">
                    	<div class="sectionCardsBlock">

					<?php $accomplishmentsloop = new \WP_Query( array( 'post_type' => 'accomplishments', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $accomplishmentsloop->have_posts() ) : $accomplishmentsloop->the_post();
$sectioncard_id	= get_field('sectioncard_id');
$sectioncard_title	= get_field('sectioncard_title');
$sectioncard_img	= get_field('sectioncard_img');
$sectioncard_content	= get_field('sectioncard_content');
$sectioncard_link	= get_field('sectioncard_link');
$sectioncard_link_text	= get_field('sectioncard_link_text');
			?>


                        <div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
                            <h3 class="mb1"><?php echo $sectioncard_title; ?></h3>
							<img src="<?php echo $sectioncard_img['url']; ?>" class=""
                                        layout="intrinsic" alt="<?php echo $sectioncard_img['alt']; ?> for Austintatious Design Co">

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
					</figure>
						</section>
						</amp-accordion>
                </section>
