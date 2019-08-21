<?php 
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function ex_custom_excerpt_length( $length ){
	 $custom = get_theme_mod( 'custom_excerpt_length' );
    if( $custom != '' ) {
        return 20;
    } else {
        return 20;
    }
	
	
}

function ex_excerpt( $excerpt ){
	return ;
}

function ex_excerpt_more( $more ) {
    return ' ...';
}
