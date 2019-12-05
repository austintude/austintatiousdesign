<?php
/**
 * Template part for front-page block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block2_sectioncards	= get_field('block2_sectioncards');

?>

<section class="block2" id="testimonials">
<div class="sectionHeader">
                    <h2 class="">What our clients say
                    </h2>
                    <div class="">
                        <p>Don't take our word for it... take it from them!
                        </p>
					</div>
</div>
                    <div class="sectionCardsBlock">
					<?php while (have_rows('block2_sectioncards')) : the_row();
						//vars
						$sectioncard_id	= get_sub_field('sectioncard_id');
						$sectioncard_author	= get_sub_field('sectioncard_author');
						$sectioncard_content	= get_sub_field('sectioncard_content');
						$sectioncard_company	= get_sub_field('sectioncard_company');
					?>

                        <div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
                            <span itemscope="" itemtype="http://schema.org/Review">

                                <span itemprop="reviewBody" class="reviewBody">
                                    <p class="mb1"><?php echo $sectioncard_content; ?></p>
                                </span>

                                <small><?php echo $sectioncard_author; ?>, <cite title="Source Title"><?php echo $sectioncard_company; ?></cite></small>
								<span class="rating" itemprop="reviewRating" itemscope=""
                                    itemtype="http://schema.org/Rating">
                                    <amp-img src="<?php echo get_template_directory_uri() ?>/assets/images/five-star-rating.png" width="208" height="40" class=""
                                        layout="fixed" alt="5 stars for Austintatious Design Co"></amp-img>
                                </span>
                                <br>
                                <span itemprop="ratingValue">5</span> / <span itemprop="bestRating">5</span>
                                <meta itemprop="worstRating" content="0">
                            </span>
						</div>
						<?php endwhile; ?>
</div>
                </section>
