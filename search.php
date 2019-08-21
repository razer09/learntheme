
<?php get_header(); ?>

<?php 
          if( have_posts() ){
            while (have_posts() ) {
              the_post();
?>

<div class="breadcump"></div>
<?php get_search_query(); ?>
 <!-- Start Latest Posts -->
  <div class="latest-posts">
    <div class="container pt-5">
      <h2 class="text-center"><?php the_title(); ?></h2>
      <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. lvoluptatem.</p>
      <div class="row">
              <!-- Start Grid Column -->
          <div class="col-md-8 col-lg-8">
            <div class="card">
              <?php 
                    if( has_post_thumbnail() ){
                    the_post_thumbnail('full', ['class' => 'card-img-top', 'title' => 'Feature image']);
                  } 
              ?>
              <div class="card-body">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo get_the_date(); ?></h6>
                <p class="card-text"><?php the_content(); ?></p>
              </div>
               <?php
          previous_post_link();
          next_post_link();?>
            </div>
          </div>
          <!-- End Grid Column -->
          <div class="col-md-4">
            <?php get_sidebar(); ?>
          </div>
    <?php
          previous_post_link();
          next_post_link();
            }
          }
        ?>  
      </div>
    </div>
  </div>
  <!-- End Latest Posts -->
<div class="breadcump"></div>

<?php get_footer(); ?>
