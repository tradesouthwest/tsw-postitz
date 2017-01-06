<?php
/* shortcode generated and output defined
 * @plugin tsw-postitiz
 */
// Add a shortcode called 'postitz' that runs the 'shortcode_routine' function

add_shortcode('postitz', 'postitz_add_shortcode');

function postitz_add_shortcode($atts, $output) {

$value1 = get_post_meta( get_the_ID(),'postitz_textarea', true );
$value2 = get_post_meta( get_the_ID(),'postitz_colorfield', true );
$value3 = get_post_meta( get_the_ID(),'postitz_fontfield', true );
$value4 = get_post_meta( get_the_ID(),'postitz_sizefield', true );
$value5 = get_post_meta( get_the_ID(),'postitz_ocdfield', true );

extract( shortcode_atts(
array(
'postitz_text'  => $value1,
'postitz_color' => $value2,
'postitz_font'  => $value3,
'postitz_size'  => $value4,
'postitz_ocd'   => $value5,
), $atts ));


// sanitize values @since ver. 0.2
$value5 = sanitize_text_field( $value5 ); // is text
$value4 = sanitize_text_field( $value4 ); // is text (html name) color
$value3 = sanitize_text_field( $value3 ); // is css text
$value2 = sanitize_text_field( $value2 ); // is font-size numeric
$value1 = sanitize_text_field( $value1 ); // is checkbox value

$output = '<div id="postitz-container" class="' . $postitz_ocd . '">';
$output .= '<div id="' . $postitz_size . '" class="' . $postitz_color . '">';
$output .= '<div class="postitz-text"><span class="'. $postitz_font .'">'. $postitz_text .'</span></div>';
$output .= '</div></div>';


return do_shortcode($output);
}



?>