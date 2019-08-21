<?php 

function me_custom_product_searchform( $form ) {
	
        $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">		
        				<div class="input-group col-md-4 woocommerce-product-search">
        				  <label class="screen-reader-text" for="s">' . __( 'Search hellow:', 'woocommerce' ) . '</label>		
						  <input type="text" class="form-control" placeholder="search product" aria-label="" aria-describedby="basic-addon1" value="' . get_search_query() . '" name="s" id="s">
						  <div class="input-group-append">
						    <button class="btn btn-dark" type="submit" id="searchsubmit">'. esc_attr__( 'Search', 'woocommerce' ) .'</button>
						  </div>
						  <input type="hidden" name="post_type" value="product" />
						</div>
                </form>';
return $form;
}