<?php 

function ex_options_page_html(){

	$opts 			= get_option( 'ex_opts' );
?>
	<div class="wrap guid-admin">
		<div class="row">
			<div class="col-md-8">
			  <div class="card mb-3 col-md-12">	
			  	<div class="card-header bg-primary text-white"><h3><?php _e( 'Guid All theme modification', 'guidall' ); ?></h3></div>
			  	<div class="card-body">
			   	 	<h5 class="card-title"><?php _e('Slider Image change : ( size recommender 1920*1280 )', 'guidall'); ?></h5>
					<div class="row">
						<form class="col-md-12" method="POST" action="admin-post.php">
							<input type="hidden" name="action" value="ex_save_option">
							<?php wp_nonce_field( 'ex_options_verify' ); ?>
							

	  						<div class="row">
								<div class="col-md-4">
									<div class="card">
									  <img class="img-uploader ex_img_uploader" src="<?php echo $opts[ 'slider_img_1' ];?>">
									  <div class="card-body">
									  	<h5 class="card-title">First slider</h5>
									    <button class="btn_upload_media btn btn-primary col-md-12 text-center">Select</button>
									 	<input type="hidden" name="first-slider" value="<?php echo $opts[ 'slider_img_1' ];?>">									 
									  </div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="card">
									  <img class="img-uploader ex_img_uploader" src="<?php echo $opts[ 'slider_img_2' ];?>">
									  <div class="card-body">
									  	<h5 class="card-title">Second slider</h5>
									    <button class=" btn_upload_media btn btn-primary col-md-12 text-center">Select</button>
									 	<input type="hidden" name="second-slider" value="<?php echo $opts[ 'slider_img_2' ];?>">
									  </div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="card">
									  <img class="img-uploader ex_img_uploader" src="<?php echo $opts[ 'slider_img_3' ];?>">
									  <div class="card-body">
									  	<h5 class="card-title">Third slider</h5>
									    <button class="btn_upload_media btn btn-primary col-md-12 text-center">Select</button>
									 	<input type="hidden" name="third-slider" value="<?php echo $opts[ 'slider_img_3' ];?>">
									  </div>
									</div>
								</div>
							</div>		
							<!--Botton update complete-->
							<div class="form-group mt-5">
								<button type="submit" class="btn btn-primary"><?php _e('Update', 'recipe'); ?></button>
							</div>
						</form>
					</div>				
					<?php 
						if( isset( $_GET[ 'status' ] ) && $_GET[ 'status' ] == 1 ){
							?><div class="alert alert-success col-md-12">enregistrer avec success</div><?php
						}
					?>
				</div>
			  </div>	
			</div>
		</div>
	</div>	
<?php
}