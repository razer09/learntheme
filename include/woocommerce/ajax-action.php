<?php 

//cart total
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();
	?>
   <div class="container content menu-fragment">
     <h4>Cart content</h4>
     <?php
      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
        $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

      if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
        ?>
        
        <?php
      
   ?>
       <div class="media">
          
          <?php
            // Remove icon
            echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
              '<a href="%s" class="remove fa fa-close" aria-label="%s" data-product_id="%s" data-product_sku="%s"></a>',
              esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
              __( 'Remove this item', 'woocommerce' ),
              esc_attr( $product_id ),
              esc_attr( $_product->get_sku() )
            ), $cart_item_key );
          ?>
          <?php
            //thubnail product
          
            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

            if ( ! $product_permalink ) {
              echo wp_kses_post( $thumbnail );
            } else {
              printf( '<a class="d-flex align-self-center mr-3" href="%s">%s</a>', esc_url( $product_permalink ), wp_kses_post( $thumbnail ) );
            }
          ?>
          <div class="media-body">
            <h6 class="mt-0">
              <?php
                if ( ! $product_permalink ) {
                  echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                } else {
                  echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a class="text-white" href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                }

                do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                // Meta data.
                echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                // Backorder notification.
                if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                  echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>' ) );
                }
              ?>
            </h6>
            <p>
              <?php     //get price and quantity
               echo $cart_item['quantity'].' * '.apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
              ?>
            </p>
          </div>
        </div>
        <hr class="hr_media_cart">
    <?php  
      }else{
      	echo "Ther is no product in cart";
      }
    }
    ?>
      <div class="price-cart-menus">
        <h5>Totale:
         <span class="menu-cart-total"><?php echo wc()->cart->get_cart_total(); ?></span>
        </h5>
      </div>
      <div class="ga-cartlink">
	    <a target="_blank" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">Cart</a>
	    <a target="_blank" href="<?php echo wc()->cart->get_checkout_url(); ?>" title="<?php _e( 'View your shopping checkout' ); ?>">Checkout</a>
      </div>
  </div>


	<?php
	$fragments['div.menu-fragment'] = ob_get_clean();

	
	
	
	return $fragments;
}


function woocommerce_cart_fragment($fragments){
	global $woocommerce;
	ob_start();
	?>

	<span class="badge badge-danger">
      <?php echo wc()->cart->get_cart_contents_count(); ?>
    </span>

	<?php
	$fragments['span.badge-danger'] = ob_get_clean();
	

	return $fragments;
}
