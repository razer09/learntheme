<?php
/*
 * Template Name: Full Width Page
 */

get_header();

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
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <?php 
                    if( has_post_thumbnail() ){
                    the_post_thumbnail('full', ['class' => 'text-center', 'title' => 'Feature image']);
                  } 
                ?>
                <h2 class="card-title mt-3 text-center"><?php the_title(); ?></h2>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo get_the_date(); ?></h6>
                <p class="card-text"><?php the_content(); ?></p>
                <div class="pagina-link text-center">
                  <?php
                   wp_link_pages(array(
                    'before'           => '<nav aria-label="Page navigation example">
                                             <ul class="pagination">',
                    'link_before'      => '     <li class="page-item page-link">',
                    'link_after'       => '       ',                         
                    'after'            =>   ' </li>
                                             </ul>
                                          </nav>',
                    'nextpagelink'     => __( 'Next', 'guidall'),
                    'previouspagelink' => __( 'Prev', 'guidall'),                       
                    ));
                  ?>
                </div>
              </div>
            </div>
          </div>
          <!-- End Grid Column -->
    <?php       
  }
   ?>  
      </div>
    </div>
  </div>
  <!-- End Latest Posts -->

<?php get_footer(); ?>