

<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
     <div class="form-group mx-sm-3 mb-2">
	        <input type="search" class="search-field form-control"
	            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
	            value="<?php echo get_search_query() ?>" name="s"
	            title="<?php echo esc_attr_x( 'Search:', 'label' ) ?>" />
	</div>
    <input type="submit" class="search-submit btn btn-primary mb-2"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>