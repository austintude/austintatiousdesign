<?php
/**
 * Template part for front-page testimonials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$testimonial_quotes				= get_field('testimonial_quotes');
$testimonials_block_title			= get_field('testimonials_block_title');
$more_testimonials_link			= get_field('more_testimonials_link');
$more_testimonials_link_txt			= get_field('more_testimonials_link_txt');

// insert acf repeater here

?>

<section id="testimonialsBlock">
<amp-script layout="container" script="hello-world" class="amp-script-sample">

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
</script>
    <div class="testimonialsBlockTitle">
    <h2><?php echo $testimonials_block_title; ?></h2>
</div>
    <ol class="testimonialsList testimonialsList">
        <!-- insert acf sub-repeater here -->
        <amp-carousel height="600"
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">
  <?php while (have_rows('testimonial_quotes')) : the_row();

// vars
$testimonial_quote = get_sub_field('testimonial_quote');
$testimonial_author = get_sub_field('testimonial_author');
$description_of_work = get_sub_field('description_of_work');
$testimonial_date = get_sub_field('testimonial_date');
$overall = get_sub_field('overall');
?>
            <li>
            <blockquote class="blockquote testimonialsCard" itemscope itemtype="http://schema.org/Review">
                <div class="testimonialsContent">
                    <span itemprop="itemReviewed" itemtype="http://schema.org/localBusiness">
                    <p itemprop="reviewBody">
                      <?php echo $testimonial_quote; ?>
                    </p>
</span>
                    <?php if ($description_of_work != null) { ?>
                    <div class="testimonialContentBlocks">
                        <div class="leftBlock">
                            <h5><?php echo $description_of_work; ?></h5>
                        </div>
                        <div class="rightBlock">
                            <ul>
                                <li>
                                    <div class="leftItem">
                                    Star Rating:
                                    </div>
                                    <div class="rightItem">
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $overall; ?>
                                            </span> /
                                            <span itemprop="bestRating">
                                            <?php echo $overall; ?>
                                                </span>
                                    </span>
                                        </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <cite class="testimonialsQuote">
                    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <?php echo $testimonial_author; ?>
                    </span> -
                    <meta itemprop="datePublished" content="<?php echo $testimonial_date; ?>">
                    <span class="testimonialDate">
                        <?php echo $testimonial_date; ?>
                    </span>

                </cite>

            </blockquote>


            </li>
            <?php endwhile; ?>
            </amp-carousel>

    </ol>
    <div class="moreTestimonials">
    <button>
				<a href="<?php echo $more_testimonials_link; ?>"><?php echo $more_testimonials_link_txt; ?></a>
</button>
                    </div>
</section>
