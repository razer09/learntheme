<?php get_header(); ?>


<div id="post-<?php the_ID(); ?>" class="breadcump">
    <?php breadcrumbs();  ?>
</div>

 <!-- Start Latest Posts -->
  <div class="latest-posts index">
    <div class="container pt-5">
       <div class="row">
              <!-- Start Grid Column -->
          <div class="col-md-8 col-lg-8">
            <div class="cat-title mb-5 text-center">
              <h1><?php the_archive_title(); ?></h1> 
            </div>    
            <div class="row">
              <?php 
                  if( have_posts() ){
                    while (have_posts() ) {
                      the_post();
              ?>
              <div class="col-md-6">
                <div class="card">
                   <a href="<?php the_permalink(); ?>">  
                      <?php 
                        if( has_post_thumbnail() ){
                        the_post_thumbnail('full', ['class' => 'card-img-top', 'title' => 'Feature image']);
                      } 
                      ?>
                  </a>
                  <div class="card-body">
                    <h4 class="card-title mt-3"><?php the_title(); ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo get_the_date(); ?></h6>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="card-link">Read More</a>
                  </div>
                </div>
              </div>  
                 <?php
              
                      }
                    }
                    ?>
                
            </div> 
            <!-- Pagination
            ============================================= -->
            <?php 
              if ( get_previous_posts_link() || get_next_posts_link() ) {     ?>
                <div class="post-navigation">
                   <?php 
                    if ( get_previous_posts_link() ) { ?>
                      <div class=" link prev">
                        <?php previous_posts_link( '<i class="fa fa-chevron-left fa-lg"></i> Prev' ); ?>
                      </div>
                   <?php
                    }
                    if ( get_next_posts_link() ) { ?>
                      <div class="link next">
                        <?php next_posts_link( 'Next <i class="fa fa-chevron-right fa-lg"></i>' ); ?>
                      </div>
              <?php } ?> 
                </div>
        <?php } ?> 
            <!--End Pagination-->    
          </div><!--End row--> 
          <!-- End Grid Column -->
          <div class="col-md-4">
            <?php get_sidebar(); ?>
          </div>
     
      </div>
    </div>
  </div>
  <!-- End Latest Posts -->

<?php get_footer(); ?>
