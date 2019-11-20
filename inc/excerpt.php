<?php
/**
 * Function for Excerpt
 *
 * @package WisdomLabs
 */

// Limit except length to # characters.
function get_excerpt( $count ) {
$excerpt = get_the_excerpt();
$lenght  = strlen($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $count);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
if ($lenght<$count) {
    $excerpt = '<p>'.$excerpt.'</p>';
} else {
    $excerpt = '<p>'.$excerpt.'...</p>';
}
return $excerpt;
}