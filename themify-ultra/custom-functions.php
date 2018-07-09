<?php

// custom excerpt length
function themify_custom_excerpt_length( $length ) {
   return 30;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );

// add more link to excerpt
function themify_custom_excerpt_more($more) {
   global $post;
   return '<a class="more-link" href="'. get_permalink($post->ID) . '">'. __('<br><br>Read more &nbsp;&rarr;', 'themify') .'</a>';
}
add_filter('excerpt_more', 'themify_custom_excerpt_more');

?>