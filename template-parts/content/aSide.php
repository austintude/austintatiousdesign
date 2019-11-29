<?php
/**
 * Template part for front-page aSide
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$block1_title	= get_field('block1_title');
$block1_title_2	= get_field('block1_title_2');
$block1_content_left	= get_field('block1_content_left');
$block1_content_right	= get_field('block1_content_right');
$block1_phone_link	= get_field('block1_phone_link');
$block1_phone_txt	= get_field('block1_phone_txt');

?>
<aside class="asideBlock">
	<ul class="asideUl">
		<li class="asideListItem"><a href="#services"
				option="" role="option" aria-selected="false" tabindex="0">Services</a></li>
		<li class="asideListItem"><a href="#testimonials"
				 option="" role="option"
				aria-selected="false" tabindex="0">Testimonials</a></li>
		<li class="asideListItem"><a href="#portfolio"
				option="" role="option" aria-selected="true" tabindex="0" selected="">Portfolio</a></li>
		<li class="asideListItem"><a href="#socialConnections"
				 option="" role="option"
				aria-selected="false" tabindex="0">Find Us</a></li>
	</ul>
</aside>
