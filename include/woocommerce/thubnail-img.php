<?php 

//hook: woocommerce_shop_loop_item_title
function ex_thubnail_img(){
	global $product;

    $attachment_ids = $product->get_gallery_image_ids();

     $image_link = wp_get_attachment_url( $attachment_ids[0] );
    ?>
    <input type="hidden" class="product_thubnai" value="<?php echo $image_link;?>">
   <?php
}