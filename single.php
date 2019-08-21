
<?php get_header(); ?>

<?php 
          if( have_posts() ){
            while (have_posts() ) {
              the_post();
?>

<div id="post-<?php the_ID(); ?>" class="breadcump">
    <?php breadcrumbs();  ?>
</div>

 <!-- Start Latest Posts -->
  <div class="latest-posts single">
    <div class="container pt-5">
       <div class="row">
          <!-- Start Grid Column -->
          <div class="col-md-8 col-lg-8">
            <div class="card">
              <div class="card-body">
                <?php 
                    if( has_post_thumbnail() ){
                    the_post_thumbnail('full', ['class' => 'text-center', 'title' => 'Feature image']);
                  } 
                  
                ?>
                <h4 class="card-title mt-3"><?php the_title(); ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo get_the_date(); ?></h6>
                <p class="card-text"><?php the_content(); ?></p>
                <div class="category">
                   <span>Category: </span><?php the_category( ', ' ); ?> 
                </div>
                <div class="pagina-link">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
                  <?php
                   wp_link_pages(array(
                    'before'           => '<nav aria-label="Page navigation example">
                                             <ul class="pagination">',
                    'link_before'      => '     <li class="page-item"><a class="page-link">',
                    'link_after'       => '      </a></li> ',                         
                    'after'            =>   '</ul>
                                          </nav>',
                    ));
                  ?>
                </div>
              </div>
            </div>
             <!-- Pagination
            ============================================= -->
            <?php 
              if ( get_previous_post_link() || get_next_post_link() ) {     ?>
                <div class="post-navigation">
                   <?php 
                    if ( get_previous_post_link() ) { ?>
                      <div class=" link prev">
                        <?php previous_post_link( '%link', '<i class="fa fa-chevron-left fa-lg"></i> Prev' ); ?>
                      </div>
                   <?php
                    }
                    if ( get_next_post_link() ) { ?>
                      <div class="link next">
                        <?php next_post_link( '%link', 'Next <i class="fa fa-chevron-right fa-lg"></i>' ); ?>
                      </div>
              <?php } ?> 
                </div>
        <?php } ?>
            <!--End Pagination--> 
          </div>
          <!-- End Grid Column -->
          <div class="col-md-4">
            <?php get_sidebar(); ?>
          </div>
    <?php
          
            }
          }
        ?>  
      </div>
    </div>
  </div>
  <!-- End Latest Posts -->

<?php get_footer(); ?>
