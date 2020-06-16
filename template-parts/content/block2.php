<?php
/**
 * Template part for front-page block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block2_sectioncards	= get_field('block2_sectioncards');

?>

<section class="block2" id="testimonials" itemscope itemtype="http://schema.org/LocalBusiness">
<amp-script layout="container" class="amp-script-sample">

</amp-script>
<script type="text/plain" target="amp-script" id="hello2">
{
"@context" : "http://schema.org",
"@type" : "LocalBusiness",
"name" : "Austintatious Design",
"image" : "https://austintatiousdesign.co/wp-content/uploads/2019/12/austintatious-design-new-banner.png",
"telephone" : "(469) 850-2946",
"address" : {
"@type" : "PostalAddress",
"streetAddress" : "431 Box Canyon Road",
"addressLocality" : "Wimberley",
"addressRegion" : "TX",
"postalCode" : "78676"
},
"openingHoursSpecification" : {
"@type" : "OpeningHoursSpecification",
"dayOfWeek" : {
"@type" : "DayOfWeek",
"name" : "Monday through Saturday"
},
"opens" : "Please insert valid ISO 8601 date/time here. Examples: 2015-07-27 or 2015-07-27T15:30",
"closes" : "Please insert valid ISO 8601 date/time here. Examples: 2015-07-27 or 2015-07-27T15:30"
},
"review" : [ {
"@type" : "Review",
"author" : {
"@type" : "Person",
"name" : "Paul Miller"
},
"reviewRating" : {
"@type" : "Rating",
"ratingValue" : "5",
"bestRating" : "5",
"worstRating" : "0"
},
"reviewBody" : "Austintatious Design has been working on my business SEO to make it climb up the Google ranks and be more visible online. This is something that I don&#39;t know much about and need help with. I have already seen results that I thought would take longer to see, and am very pleased with the progress and exposure I am receiving. It must be because Daniel knows what he is doing, talking about, and implementing. You can tell this is a passion for him as he is always researching and staying on the cutting edge of his market. #seo #webdesign #DigitalMarketing"
}, {
"@type" : "Review",
"author" : {
"@type" : "Person",
"name" : "E. J. Josephson"
},
"reviewRating" : {
"@type" : "Rating",
"ratingValue" : "5",
"bestRating" : "5",
"worstRating" : "0"
},
"reviewBody" : "Daniel at Austintatious Design was an absolute lifesaver. Due to an unforeseen issue I needed to change my business name on my website and across all my social media channels. The change also required detailed changes to my content. No easy task. Daniel and I sat down for a strategy meeting, we put an action plan together and he went to work. Within 24 hours (I&#39;m not sure when Daniel sleeps) all the changes were made AND we were under budget! WOW, I was blown away. Based on this experience I plan on having Daniel and Austintatious Design do some graphic, SEO and social media work for me. I highly recommend Austintatious Design!"
}, {
"@type" : "Review",
"author" : {
"@type" : "Person",
"name" : "Allison Franklin"
},
"reviewRating" : {
"@type" : "Rating",
"ratingValue" : "5",
"bestRating" : "5",
"worstRating" : "0"
},
"reviewBody" : "Daniel at Austintatious Design has proved to be an amazing asset to my company. His web design has garnered many compliments by my consumers as well as other designers. I appreciate his ability to think outside of the box and produce something that really stands out. He has an unbelievable amount of patience which is evident in working with me and my lack of graphic design and SEO knowledge. Not only is he patient and willing to work, the rough drafts of the design for my logo, branding and sample packets were so stellar I had a difficult time chosing which option to accept! Daniel keeps ME on my toes and stays a step ahead of my demands and requirements with idea generation and direction. I&#39;ll second the statement about not knowing when Daniel sleeps as he seems to work hard and around the clock! You can&#39;t go wrong with Austintatious Design."
}, {
"@type" : "Review",
"author" : {
"@type" : "Person",
"name" : "Lydia Brasher"
},
"reviewRating" : {
"@type" : "Rating",
"ratingValue" : "5",
"bestRating" : "5",
"worstRating" : "0"
},
"reviewBody" : "Representing a small, independent school, I commend Daniel with Austintatious Design for really going the extra mile in quickly learning about our market, taking the time (&amp; patience) to educate us on the ins &amp; outs of digital marketing, and ultimately helping us build a well-rounded plan to boost our SEO--and improve our overall digital marketing strategy--all while keeping our budget and time constraints in check. Thanks Daniel, we are very excited about where we will go from here!"
} ]
}
{
      "@context": "https://schema.org/",
      "@type": "AggregateRating",
      "itemReviewed": {
        "@type": "LocalBusiness",
        "image": "https://austintatiousdesign.co/wp-content/uploads/2019/12/austintatious-design-new-banner.png",
        "name": "Austintatious Design",
        "telephone" : "(469) 850-2946",
"address" : {
"@type" : "PostalAddress",
"streetAddress" : "431 Box Canyon Road",
"addressLocality" : "Wimberley",
"addressRegion" : "TX",
"postalCode" : "78676"
}
      },
      "ratingValue": "5",
      "bestRating": "5",
      "ratingCount": "11"
    }
</script>
<div class="sectionHeader">
                    <h2 class="">What <span itemprop="name">Austintatious Design</span>'s clients say
                    </h2>
                    <div class="">
                        <p>Don't take our word for it... take it from them!
                        </p>
					</div>
</div>
                    <div class="sectionCardsBlock">
					<?php $testimonialsloop = new \WP_Query( array( 'post_type' => 'testimonials', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $testimonialsloop->have_posts() ) : $testimonialsloop->the_post();
$sectioncard_id	= get_field('sectioncard_id');
$sectioncard_title	= get_field('sectioncard_title');
$sectioncard_content	= get_field('sectioncard_content');
$sectioncard_company	= get_field('sectioncard_company');
$sectioncard_img	= get_field('sectioncard_img');
			?>

                        <div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
                            <span itemprop="review" itemscope itemtype="http://schema.org/Review">

                                <span itemscope itemprop="reviewBody" class="reviewBody">
                                    <p class="mb1"><?php echo $sectioncard_content; ?></p>
                                </span>

                                <small><span itemprop="author" itemscope itemtype="http://schema.org/Person"><?php echo $sectioncard_title; ?></span>, <cite title="Source Title"><?php echo $sectioncard_company; ?></cite></small>
								<br>
								<span class="rating" itemprop="reviewRating" itemscope
                                    itemtype="http://schema.org/Rating">
                                    <img src="<?php echo $sectioncard_img['url']; ?>" width="208" height="40" class=""
                                        layout="fixed" alt="<?php echo $sectioncard_img['alt']; ?> for Austintatious Design Co">

                                <br>
                                <span itemprop="ratingValue">5</span> / <span itemprop="bestRating">5</span>
								<meta itemprop="worstRating" content="0">
								</span>
                            </span>
						</div>
						<?php endwhile;  wp_reset_query(); ?>
</div>
<span itemprop="aggregateRating"
    itemscope itemtype="http://schema.org/AggregateRating" nodisplay>
   <meta itemprop="ratingValue" content="5">
   <meta itemprop="reviewCount" content="11">
</span>
                </section>
