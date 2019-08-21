<?php 

function ex_widjets(){

	/**
	 * Creates a sidebar
	 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	 */
	$args = array(
		'name'          => __( 'My first sidebar', 'exemple' ),
		'id'            => 'ex_sidebar',
		'description'   => __( 'sidebar for guidall dz theme', 'exemple' ),
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'before_title'  => 		'<h4 class="widgettitle">',
		'after_title'   => 		'</h4>
								<div class="widget-content">',
		'after_widget'  => 		'</div>					
							</div>',					
	);
	
	register_sidebar( $args );
	
}