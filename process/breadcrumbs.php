<?php  

function breadcrumbs($id = null){
?>

	<nav aria-label="breadcrumb">	
	  <ol class="breadcrumb">
	  	<div class="container">
		    <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
		    <?php if(!empty($id)): ?>
		    <li class="breadcrumb-item"><a href="<?php echo get_permalink( $id ); ?>"><?php echo get_the_title( $id ); ?></a></li>
		    <?php endif; ?>
		    <li class="breadcrumb_last breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
	  	</div>
	  </ol>	  
	</nav>

<?php }