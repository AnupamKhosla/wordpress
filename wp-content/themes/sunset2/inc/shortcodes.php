<?php 
/*

SHORTCODE OPTIONS


*/

add_shortcode('tooltip', 'sunset2_tooltip');

function sunset2_tooltip($atts, $content = null) {

	$atts = shortcode_atts(
				array(
					'placement' => 'top',
					'title' 	=> 'def_title'
				),
				$atts,
				'tooltip'
			);

	return '<span class="sunset2-tooltip" data-toggle="tooltip" data-placement="' . $atts['placement'] . '" title="' . $atts['title'] . '">'. $content . '</span>';
}

