<?php
// Date Shortcode
function date_shortcode( $atts ) {
	$a = shortcode_atts(
		array(
            'format' => 'j.n.Y',
		),
		$atts
	);

    return date( $a['format'] );
}
add_shortcode( 'date', 'date_shortcode' );
?>