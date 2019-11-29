<?php
/**
 * Template part for contact
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$contact_form				= get_field('contact_form');
$contact_amp_iframe_placeholder				= get_field('contact_amp_iframe_placeholder');

?>

<div id="ctaBlock">
	<div class="contactForm">
		<a href="tel:3102134090" rel="noreferrer noopenner"><h3>Call Us Today - (310) 213-4090</h3></a>
		<h3>Bring your vehicle in for a FREE repair estimate today</h3>
		<h3>Buying a used vehicle? Bring it in for a FREE inspection BEFORE you buy.</h3>
			<h3>Email Us</h3>
			<amp-iframe 
				width="360" 
				height="360" 
				layout="fixed" 
				sandbox="allow-scripts allow-same-origin allow-popups" 
				frameborder="0" 
				src="<?php echo $contact_form; ?>"
				media="(max-width: 43.5em) and (min-height:27em)"
				>
				<amp-img layout="fill"
					src="<?php echo $contact_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe 
				width="580" 
				height="310" 
				layout="fixed" 
				sandbox="allow-scripts allow-same-origin allow-popups" 
				frameborder="0" 
				src="<?php echo $contact_form; ?>"
				media="(max-width: 43.5em) and (max-height:26em)"
				>
				<amp-img layout="fill"
					src="<?php echo $contact_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe 
				width="610" 
				height="310" 
				layout="fixed" 
				sandbox="allow-scripts allow-same-origin allow-popups" 
				frameborder="0" 
				src="<?php echo $contact_form; ?>"
				media="(min-width: 43.6em) and (min-height:27em) and (max-width: 48.5em)"
				>
				<amp-img layout="fill"
					src="<?php echo $contact_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
			<amp-iframe 
				width="610" 
				height="350" 
				layout="fixed" 
				sandbox="allow-scripts allow-same-origin allow-popups" 
				frameborder="0" 
				src="<?php echo $contact_form; ?>"
				media="(min-width: 48.6em)"
				>
				<amp-img layout="fill"
					src="<?php echo $contact_amp_iframe_placeholder['url']; ?>"
					placeholder>
				</amp-img>
			</amp-iframe>
  
	</div>
</div>

