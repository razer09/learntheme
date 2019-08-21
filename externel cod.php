<?php


//affivher quantiter
add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );

//afficher quantiter
function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
		$html .= woocommerce_quantity_input( array(), $product, false );
		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
		$html .= '</form>';
	}
	return $html;
}







ajax:

<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); 
		print_r($fragments);
	?>
	</a>
	<?php

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
        $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
          ?>
          <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

            <td class="product-remove">
              <?php
                // @codingStandardsIgnoreLine
                echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                  '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                  esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                  __( 'Remove this item', 'woocommerce' ),
                  esc_attr( $product_id ),
                  esc_attr( $_product->get_sku() )
                ), $cart_item_key );
              ?>
            </td>

            <td class="product-thumbnail">
            <?php
            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

            if ( ! $product_permalink ) {
              echo wp_kses_post( $thumbnail );
            } else {
              printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), wp_kses_post( $thumbnail ) );
            }
            ?>
            </td>

            <td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
            <?php
            if ( ! $product_permalink ) {
              echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
            } else {
              echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
            }

            do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

            // Meta data.
            echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

            // Backorder notification.
            if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
              echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>' ) );
            }
            ?>
            </td>

            <td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
              <?php
                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
              ?>
            </td>

            <td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
            <?php
            if ( $_product->is_sold_individually() ) {
              $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
            } else {
              $product_quantity = woocommerce_quantity_input( array(
                'input_name'   => "cart[{$cart_item_key}][qty]",
                'input_value'  => $cart_item['quantity'],
                'max_value'    => $_product->get_max_purchase_quantity(),
                'min_value'    => '0',
                'product_name' => $_product->get_name(),
              ), $_product, false );
            }
            	
            echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
            ?>
            </td>

            <td class="product-subtotal" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>">
              <?php
                echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
              ?>
            </td>
          </tr>
          <?php
        }
      }



      //show product detaille 
      add_action( 'woocommerce_after_shop_loop_item' ,function(){
          ?>
          <!-- Button trigger modal -->
          <div class="show-detail data-toggle=" data-toggle="modal" data-target="#product<?php the_ID();?>">
            <i class="fa fa-eye"></i>
            <!-- Modal -->
            <div class="modal fade" id="product<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><?php the_title(); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row modal-content-detaill">
                      <div class="col-md-4">
                    <?php

                    ?>
                  </div>
                  <div class="col-md-8">
                    <?php
                      
                    ?>
                  </div>              
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
        });
        /* show detaille of product */

        .show-detail{
          position: absolute;
          top: 247px;
          left: 50%;
          color: #08526d;
          background: #ffffff;
          font-size: 23px;
          padding: 0px 4px;
          border-radius: 50%;
          -webkit-transition: all .2s ease-in-out;
          -moz-transition: all .2s ease-in-out;
          -o-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
        }



        /* show detaille of product */
      ?>

      