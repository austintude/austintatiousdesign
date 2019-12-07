<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

			$contact_us_phone			= get_field('contact_us_phone');
			$contact_us_phone_link			= get_field('contact_us_phone_link');
			$contact_us_street			= get_field('contact_us_street');
			$contact_us_street_suite			= get_field('contact_us_street_suite');
			$contact_us_city			= get_field('contact_us_city');
			$contact_us_state			= get_field('contact_us_state');
			$contact_us_zip			= get_field('contact_us_zip');
			$contact_us_open_datetime			= get_field('contact_us_open_datetime');
			$contact_us_open_days_times			= get_field('contact_us_open_days_times');
			$contact_us_closed			= get_field('contact_us_closed');
			$contact_us_form			= get_field('contact_us_form');
			$cta_loading_image			= get_field('cta_loading_image');
			$middle_images			= get_field('middle_images');
			$right_images			= get_field('right_images');
			$facebook_link			= get_field('facebook_link');
			$instagram_link			= get_field('instagram_link');
			$linkedin_link			= get_field('linkedin_link');

?>


<div class="site-info">





	<div class="topBlock">
		<div class="leftBlock" vocab="http://schema.org/" typeof="LocalBusiness">
			<div class="softBlock">
		<div class="blockTitle">
		<h4>Contact Information</h4>
</div>
		<section id="physical">

        <div id="address">
            <address property="address" typeof="PostalAddress">
			<h5>Austintatious Design</h5>
			<h5><span property="streetAddress"><?php echo $contact_us_street; ?>
		<br>
		<?php echo $contact_us_street_suite; ?></span>
            <br>
            <span property="addressLocality"><?php echo $contact_us_city; ?></span>,

			<span property="addressRegion"><?php echo $contact_us_state; ?></span> <?php echo $contact_us_zip; ?></h5>
</address>
        </div>
</section>
<div id="phone">
			<span property="telephone"><a href="tel:<?php echo $contact_us_phone_link; ?>"><?php echo $contact_us_phone; ?></a></span>
		</div>
<div id="hours">
	<h4>Hours of Operation</h4>
			<ul>
				<li>
				<time itemprop="openingHours" datetime="<?php echo $contact_us_open_datetime; ?>"><?php echo $contact_us_open_days_times; ?></time>
				</li>

				<li>
				 <?php echo $contact_us_closed; ?> - Closed
				</li>
			</ul>

        </div>
        <div id="googleMap">
        <amp-iframe width="600" height="450" layout="responsive"
			  sandbox="allow-scripts allow-same-origin allow-popups"
			  frameborder="0"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13820.148829481264!2d-98.077079!3d30.007088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71e354a4170d40c3!2sAustintatious%20Design!5e0!3m2!1sen!2sus!4v1575479234268!5m2!1sen!2sus">
    <amp-img layout="fill"
             src="<?php echo get_template_directory_uri() ?>/assets/images/Google-Map-theme.jpg"
			 placeholder>
			</amp-img>
  </amp-iframe>
</div>
</div>
<div class="softBlock">
<div class="blockTitle">
		<h4>Join Us On Social Media</h4>
</div>

	<div id="themeSocial">
		<div id="socialIcon1" aria-label="facebook link icon">
			<a href="<?php echo $facebook_link; ?>" aria-label="facebook link" alt="facebook link">
			<amp-img
				src="<?php echo get_template_directory_uri() ?>/assets/images/facebook-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="facebook icon">
			</amp-img>
</a>
		</div>
		<div id="socialIcon2" aria-label="twitter link icon">
		<a href="<?php echo $instagram_link; ?>" aria-label="twitter link" alt="twitter link">
			<amp-img
				src="<?php echo get_template_directory_uri() ?>/assets/images/instagram-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="instagram icon">
			</amp-img>
</a>
		</div>
		<div id="socialIcon3" aria-label="linkedin link icon">
		<a href="<?php echo $linkedin_link; ?>" aria-label="linkedin link" alt="linkedin link">
			<amp-img
				src="<?php echo get_template_directory_uri() ?>/assets/images/linkedin-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="linkedin icon">
			</amp-img>
</a>
		</div>
</div>
</div>
</div>
<div class="middleBlock">
	<div class="blockTitle">
		<h4><?php bloginfo( 'name' ); ?></h4>
</div>
<div class="blockImages">
		<?php while (have_rows('middle_images')) : the_row();

// vars
$middle_image_1 = get_sub_field('middle_image_1');
$middle_image_1_alt = get_sub_field('middle_image_1_alt');
$middle_image_2 = get_sub_field('middle_image_2');
$middle_image_2_alt = get_sub_field('middle_image_2_alt');
?>
		<amp-img
		src="<?php echo $middle_image_1; ?>"
  width="640"
			height="640"
			layout="intrinsic"
			lightbox
			alt="<?php echo $middle_image_1_alt; ?>">
		</amp-img>
		<amp-img
		src="<?php echo $middle_image_2; ?>"
  width="640"
			height="640"
			layout="intrinsic"
			lightbox
			alt="<?php echo $middle_image_2_alt; ?>">
		</amp-img>
		<?php endwhile; ?>
</div>
</div>
<div class="rightBlock">
<div class="blockTitle">
		<h4>Sharing Your Passion!</h4>
</div>
<div class="blockImages">
<?php while (have_rows('right_images')) : the_row();

// vars
$right_image_1 = get_sub_field('right_image_1');
$right_image_1_alt = get_sub_field('right_image_1_alt');
$right_image_2 = get_sub_field('right_image_2');
$right_image_2_alt = get_sub_field('right_image_2_alt');
?>
		<amp-img
		src="<?php echo $right_image_1; ?>"
  width="2500"
			height="8100"
			layout="intrinsic"
			lightbox
			alt="<?php echo $right_image_1_alt; ?>">
		</amp-img>
		<amp-img
		src="<?php echo $right_image_2; ?>"
  width="2500"
			height="8100"
			layout="intrinsic"
			lightbox
			alt="<?php echo $right_image_2_alt; ?>">
		</amp-img>
		<?php endwhile; ?>
</div>
</div>

</div>
<div class="baseBlock">

<div id="themeLogo">
<?php the_custom_logo(); ?>
</div>
<div class="builtBy">
	<a href="<?php echo esc_url( __( 'https://austintatiousdesign.co/', 'wp-rig' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly built and maintained by %s', 'wp-rig' ), 'Austintatious Design' );
		?>
	</a>
</div>
</div>

</div><!-- .site-info -->
