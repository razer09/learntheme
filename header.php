<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>acilyo</title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Start Upper Bar -->
    <div class="upper-bar">
      <div class="container">
        <div class="row">
          <div class="info col-sm text-center text-sm-left">
            <?php 
            if( get_theme_mod( 'ex_phone_handle' ) ){
                ?>
                 <i class="fa fa-phone"></i> <span><?php _e( get_theme_mod( 'ex_phone_handle' ), "exemple" ); ?></span>,
                <?php
              }
            if( get_theme_mod( 'ex_gmail_handle' ) ){
                ?>
                <i class="fa fa-envelope-o"></i> <?php _e( get_theme_mod( 'ex_gmail_handle' ), "exemple" );               
              }
            ?>
          </div>
          <div class="info col-sm text-center text-sm-right">
            <span>Let's Work Together!</span>
            <span class="get-quote">Get Quote</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Upper Bar -->
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?php bloginfo( 'url' )?>">
          <span><?php echo get_theme_mod('ex_nav_title_p1'); ?></span>
          <span><?php echo get_theme_mod('ex_nav_title_p2'); ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <?php 
              if( has_nav_menu( 'primary' ) ){
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
        	  				'depth'	          => 0, // 1 = no dropdowns, 2 = with dropdowns,0 all.
        	  				'container'       => 'div',
        	  				'container_class' => 'collapse navbar-collapse',
        	  				'container_id'    => 'main-nav',
        	  				'menu_class'      => 'navbar-nav ml-auto',
        	  				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        	  				'walker'          => new WP_Bootstrap_Navwalker()
	                ) );
	              }
            ?>
            <div id="main-nav" class="login-menu collapse navbar-collapse">
            <!-- Button trigger modal -->
            <div class="login-bitton" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-user-circle-o fa-2x" aria-hidden="true" ></i>
            </div> 

            <?php if ( is_user_logged_in() ) {
                 //get curent user  
                 $current_user = wp_get_current_user(); 
                ?>
              <span class="span-login" data-toggle="modal" data-target="#exampleModal">
              <?php echo $current_user->user_login; ?>
              </span>

                <div class="submenu-login">
                    <ul>
                      <li><a target="_blank" href="<?php echo site_url( '/my-account' );?>">My Acount</a></li>
                      <li><a href="<?php echo wp_logout_url( home_url() ); ?>">Log out</a></li>
                    </ul>
                  </div>
                <?php
            }else{  
              ?>
              <span class="span-login" data-toggle="modal" data-target="#exampleModal">Login</span>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h2>Login</h2>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h4>Login to you account</h4>
                      <form id="ex_login_form">
                        <?php wp_nonce_field( 'ex_auth', '_wpnonce' ); ?>
                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" id="ex_login_name" placeholder="User name">
                        </div>
                        <div class="form-group col-md-12">
                          <input type="password" class="form-control" id="ex_login_password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-danger"> LOGIN </button>
                      </form>
                      <div id="login_statu"></div>
                      <p class="is-member"> Not a member ? 
                        <a href="<?php echo site_url( '/registration' );?>" class="register-tab"> Register now</a>
                      </p>
                    </div><!--End modal body-->
                  </div><!--End modal content-->
                </div><!--End modal dialog-->
              </div><!--End modal modal-->
            <?php
            }
             ?>
             </div>  
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start fixed menu -->
    
    <div class="fixed-menu ">
      <i class="fa fa-shopping-basket fa-lg">
        <span class="badge badge-danger">
          <?php echo wc()->cart->get_cart_contents_count(); ?>
        </span>
      </i>
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
    </div>
    <!-- End fixed menu -->

