<?php
/**
 * Template part for front-page block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$service_images	= get_field('service_images');
$services_title	= get_field('services_title');
$services_desc	= get_field('services_desc');
$services_tag	= get_field('services_tag');
$services_offered	= get_field('services_offered');

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
                        <div class="sectionCard" id="stellarIce">
                            <span itemscope="" itemtype="http://schema.org/Review">
                                <span class="rating" itemprop="reviewRating" itemscope=""
                                    itemtype="http://schema.org/Rating">
                                    <amp-img src="<?php echo get_template_directory_uri() ?>/assets/images/five-star-rating.png" width="208" height="40" class=""
                                        layout="fixed" alt="Austintatious Design Co"></amp-img>
                                </span>
                                <br>
                                <span itemprop="ratingValue">5</span> / <span itemprop="bestRating">5</span>
                                <meta itemprop="worstRating" content="0">
                                <span itemprop="reviewBody" class="reviewBody">
                                    <p class="mb1">Austintatious Design has been working on my business SEO to make it
                                        climb up the Google ranks and be more visible online. This is something that I
                                        don't know much about and need help with. I have already seen results that I
                                        thought would take longer to see, and am very pleased with the progress and
                                        exposure I am receiving. It must be because Daniel knows what he is doing,
                                        talking about, and implementing. You can tell this is a passion for him as he is
                                        always researching and staying on the cutting edge of his market. #seo
                                        #webdesign #DigitalMarketing</p>
                                </span>

                                <small>Paul Miller, <cite title="Source Title">Stellar Ice</cite></small>

                            </span>
                        </div>
                        <div class="sectionCard" id="RATS">
                            <span itemscope="" itemtype="http://schema.org/Review">
                                <span class="rating" itemprop="reviewRating" itemscope=""
                                    itemtype="http://schema.org/Rating">
                                    <amp-img src="<?php echo get_template_directory_uri() ?>/assets/images/five-star-rating.png" width="208" height="40" class=""
                                        layout="fixed" alt="Austintatious Design Co"></amp-img>
                                </span>
                                <br>
                                <span itemprop="ratingValue">5</span> / <span itemprop="bestRating">5</span>
                                <meta itemprop="worstRating" content="0">
                                <span itemprop="reviewBody" class="reviewBody">
                                    <p class="mb1">Daniel at Austintatious Design was an absolute lifesaver. Due to an
                                        unforeseen issue I needed to change my business name on my website and across
                                        all my social media channels. The change also required detailed changes to my
                                        content. No easy task. Daniel and I sat down for a strategy meeting, we put an
                                        action plan together and he went to work. Within 24 hours (I'm not sure when
                                        Daniel sleeps) all the changes were made AND we were under budget! WOW, I was
                                        blown away. Based on this experience I plan on having Daniel and Austintatious
                                        Design do some graphic, SEO and social media work for me. I highly recommend
                                        Austintatious Design!</p>
                                </span>

                                <small>E. J. Josephson, <cite title="Source Title">Road and Track
                                        Specialists</cite></small>

                            </span>
                        </div>
                        <div class="sectionCard" id="inkSolv30">
                            <span itemscope="" itemtype="http://schema.org/Review">
                                <span class="rating" itemprop="reviewRating" itemscope=""
                                    itemtype="http://schema.org/Rating">
                                    <amp-img src="<?php echo get_template_directory_uri() ?>/assets/images/five-star-rating.png" width="208" height="40" class=""
                                        layout="fixed" alt="Austintatious Design Co"></amp-img>
                                </span>
                                <br>
                                <span itemprop="ratingValue">5</span> / <span itemprop="bestRating">5</span>
                                <meta itemprop="worstRating" content="0">
                                <span itemprop="reviewBody" class="reviewBody">
                                    <p class="mb1">Daniel at Austintatious Design has proved to be an amazing asset to
                                        my company. His web design has garnered many compliments by my consumers as well
                                        as other designers. I appreciate his ability to think outside of the box and
                                        produce something that really stands out.
                                        <br>

                                        He has an unbelievable amount of patience which is evident in working with me
                                        and my lack of graphic design and SEO knowledge. Not only is he patient and
                                        willing to work, the rough drafts of the design for my logo, branding and sample
                                        packets were so stellar I had a difficult time chosing which option to accept!
                                        <br>
                                        Daniel keeps ME on my toes and stays a step ahead of my demands and requirements
                                        with idea generation and direction. I'll second the statement about not knowing
                                        when Daniel sleeps as he seems to work hard and around the clock! You can't go
                                        wrong with Austintatious Design.</p>
                                </span>

                                <small>Allison Franklin, <cite title="Source Title">INK SOLV 30</cite></small>

                            </span>
                        </div>
                        <div class="sectionCard" id="SSES">
                            <span itemscope="" itemtype="http://schema.org/Review">
                                <span class="rating" itemprop="reviewRating" itemscope=""
                                    itemtype="http://schema.org/Rating">
                                    <amp-img src="<?php echo get_template_directory_uri() ?>/assets/images/five-star-rating.png" width="208" height="40" class=""
                                        layout="fixed" alt="Austintatious Design Co"></amp-img>
                                </span>
                                <br>
                                <span itemprop="ratingValue">5</span> / <span itemprop="bestRating">5</span>
                                <meta itemprop="worstRating" content="0">
                                <span itemprop="reviewBody" class="reviewBody">
                                    <p class="mb1">Representing a small, independent school, I commend Daniel with
                                        Austintatious Design for really going the extra mile in quickly learning about
                                        our market, taking the time (&amp; patience) to educate us on the ins &amp; outs
                                        of digital marketing, and ultimately helping us build a well-rounded plan to
                                        boost our SEO--and improve our overall digital marketing strategy--all while
                                        keeping our budget and time constraints in check.

                                        Thanks Daniel, we are very excited about where we will go from here!</p>
                                </span>

                                <small>Lydia Brasher, <cite title="Source Title">St. Stephen's Episcopal
                                        School</cite></small>

                            </span>
                        </div>

                        <!-- hack to ensure that cards are aligned in the last line -->
                        <div class="abe-sample-card abe-sample-card-filler flex-auto px1 mr1"></div>
                        <div class="abe-sample-card abe-sample-card-filler flex-auto px1 mr1"></div>
                        <div class="abe-sample-card abe-sample-card-filler flex-auto px1 mr1"></div>
                        <div class="abe-sample-card abe-sample-card-filler flex-auto px1 mr1"></div>
                        <div class="abe-sample-card abe-sample-card-filler flex-auto px1 mr1"></div>
                        <div class="abe-sample-card abe-sample-card-filler flex-auto px1 mr1"></div>
                        <div class="abe-sample-card abe-sample-card-filler flex-auto px1 mr1"></div>
                    </div>
                </section>
