<?php get_header();
  $opts       = get_option( 'ex_opts' );
 ?> 
   
    <!-- Start Slider -->
    <div class="slider">
      <div id="main-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <h1>
            <?php echo get_theme_mod('ex_text_slider_p1'); ?>
            <span><?php echo get_theme_mod('ex_text_slider_p2'); ?></span>
            <?php echo get_theme_mod('ex_text_slider_p3'); ?>
          </h1>
          <div class="overlay"></div>
          <div class="carousel-item carousel-one active" style="background-image: url( <?php echo $opts[ 'slider_img_1' ];?> )">

          </div>
          <div class="carousel-item carousel-two" style="background-image: url( <?php echo $opts[ 'slider_img_2' ];?> )">
          </div>
          <div class="carousel-item carousel-three" style="background-image: url( <?php echo $opts[ 'slider_img_3' ];?> )">
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
    <!-- End Slider -->
   
    <!-- Start Overview -->
    <div class="overview text-center wow flipInY" data-wow-duration="1s" data-wow-offset="300">
      <div class="container">
        <h2 class="h1"><?php echo get_theme_mod('ex_company_title'); ?></h2>
        <p><?php echo get_theme_mod('ex_company_text'); ?></p>
        <h4><?php echo get_theme_mod('ex_company_h4'); ?></h4>
        <button><?php echo get_theme_mod('ex_company_button'); ?></button>
      </div>
    </div>
    <!-- End Overview -->
    <!-- Start Featured Work -->
    <div class="featured-work text-center wow fadeInLeft" data-wow-duration="1s" data-wow-offset="400">
      <div class="container">
        <h2><?php echo get_theme_mod('ex_feature_work_title'); ?></h2>
        <p><?php echo get_theme_mod('ex_feature_work_text'); ?></p>
        <ul class='list-unstyled row'>
          <li data-class="all" class="active col-md">All</li>
          <?php
            $term = get_terms(array(
              'taxonomy'  =>'product_cat',
              'name'      => 'khadamate'  
            ));

            $parent_id = $term[0]->term_id;
            
            // get categorie of product
            $terms = get_terms(array(
              'taxonomy'  =>'product_cat',
              'parent'   => $parent_id
            ));

           foreach ($terms as $term) {
             $term_link =  get_term_link( $term, 'product_cat' );
             ?>
             <li data-class=".<?php echo $term->slug;?>" class="col-md"><?php echo $term->name;?></li>
             <?php
           }
           ?> 
        </ul>
      </div>
      <div class="shuffle-imgs">
          <div class="items-box">
          <?php  

            $args = array(
              'post_type'        => 'product',
              'posts_per_page'   =>8 ,
              'product_cat'      =>'khadamate'
              
            ); 
            $the_query = new WP_Query( $args );
              $i=0;
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    global $product;                   
                    
                    $name='';  
                    $terms = get_the_terms( $product->get_id(), 'product_cat' );
                    foreach ($terms as $term) {
                       if( $term->parent !== 0 ){
                        $name =$term->slug; 
                      }
                    }

                    if ( $i == 0 ) {
                        ?><div class="row"><?php
                      } 

                    ?>  
                    <div class="col-md item">
                         <?php the_post_thumbnail('full', ['class' => $name]);?>
                          <div class="over text-center">
                            <h4 class="upper"><?php the_title();?></h4>
                            <p><?php the_excerpt();?></p>
                            <a href="<?php echo get_permalink();?>">
                              <button class="upper">Show Feature</button>
                            </a>  
                        </div>
                    </div>  
                    <?php
                    if ( $i == 3 ) {
                        ?></div><div class="row"><?php
                      } 
                    $i++;
                } 
            }      
            $i=0;
            /* Restore original Post Data */
            wp_reset_postdata();  
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- End Featured Work -->
    <!-- Start Latest Posts -->
    <div class="latest-posts index">
      <div class="container">
        <h2 class="text-center"><?php echo get_theme_mod('ex_latest_post_title'); ?></h2>
        <p class="section-description text-center"><?php echo get_theme_mod('ex_latest_post_text'); ?></p>
        <div class="row">
        	<?php 
        		if( have_posts() ){
        			while (have_posts() ) {
        				the_post();
        	?>
        				<!-- Start Grid Column -->
						<div class="col-md-6 col-lg-4">
							<div class="card">
							  <a href="<?php the_permalink(); ?>">	
								  <?php 
								  	if( has_post_thumbnail() ){
										the_post_thumbnail('full', ['class' => 'card-img-top', 'title' => 'Feature image']);
									}	
								  ?>
							  </a>
							  <div class="card-body">
							    <h4 class="card-title"><?php the_title(); ?></h4>
							    <h6 class="card-subtitle mb-2 text-muted"><?php echo get_the_date(); ?></h6>
							    <p class="card-text"><?php the_excerpt(); ?></p>
							    <a href="<?php the_permalink(); ?>" class="card-link">Read More</a>
							  </div>
							</div>
						</div>
						<!-- End Grid Column -->
			<?php
        			}
        		}
        	?>	
        </div>
      </div>
    </div>
    <!-- End Latest Posts -->
    <!-- Start Testimonials -->
    <div class="testimonials" style="background-image: url( <?php echo get_theme_mod( 'ex_testimonial_image' );?> )">
      <div class="overlay"></div>
      <div class="container">
        <div id="testimonials" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#testimonials" data-slide-to="0" class="active"></li>
            <li data-target="#testimonials" data-slide-to="1"></li>
            <li data-target="#testimonials" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-caption d-none d-block">
                <img src=<?php echo get_template_directory_uri() ."/assets/img/avatar01.png"; ?> alt="...">
                <h3>Mohamed Faragallah</h3>
                <span>Company CEO</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nq</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption d-none d-block">
                <img src=<?php echo get_template_directory_uri() ."/assets/img/avatar01.png"; ?> alt="...">
                <h3>Ahmed Mosaad</h3>
                <span>Company Manager</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nq</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption d-none d-block">
                <img src=<?php echo get_template_directory_uri() ."/assets/img/avatar01.png"; ?> alt="...">
                <h3>John Skeet</h3>
                <span>Free Lancer</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nq</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!-- End Testimonials -->
    <!-- Start Pricing Table -->
    <div class="pricing-table text-center">
      <div class="container">
        <h2><?php echo get_theme_mod('ex_princing_table_title'); ?></h2>
        <p class="section-description"><?php echo get_theme_mod('ex_princing_table_text'); ?></p>
        <div class="row">
          <!-- Start Grid Column -->
          <div class="col-md-6 col-lg-4 wow fadeInLeft"  data-wow-duration="2s" data-wow-offset="350">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Small Business</h4>
                <h6 class="card-subtitle mb-2 text-muted">Lorem Ipsum</h6>
                <p class="card-text">$99/<span>Year</span></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                </ul>
                <a href="#" class="card-link">Read More</a>
              </div>
            </div>
          </div>
          <!-- End Grid Column -->
          <!-- Start Grid Column -->
          <div class="col-md-6 col-lg-4 wow fadeInDown"  data-wow-duration="2s" data-wow-offset="350">
            <div class="card corporate">
              <div class="card-body">
                <h4 class="card-title">Corporate</h4>
                <h6 class="card-subtitle mb-2 text-muted">Lorem Ipsum</h6>
                <p class="card-text">$199/<span>Year</span></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                </ul>
                <a href="#" class="card-link">Read More</a>
              </div>
            </div>
          </div>
          <!-- End Grid Column -->
          <!-- Start Grid Column -->
          <div class="col-md-6 col-lg-4 wow fadeInRight"  data-wow-duration="2s" data-wow-offset="350">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Enterprise</h4>
                <h6 class="card-subtitle mb-2 text-muted">Lorem Ipsum</h6>
                <p class="card-text">$299/<span>Year</span></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                  <li class="list-group-item">Lorem Ipsum</li>
                </ul>
                <a href="#" class="card-link">Read More</a>
              </div>
            </div>
          </div>
          <!-- End Grid Column -->
        </div>
      </div>
    </div>
    <!-- End Pricing Table -->
    <!-- Start Why Choose Us -->
    <div class="choose-us">
      <div class="container-fluid">
        <div class="row">
          <div class="info col-xl-6">
            <img src="<?php echo get_theme_mod( 'ex_chood_us_image' );?>" alt="" />
          </div>
          <div class="info col-xl-6">
            <h2 class="h1"><?php echo get_theme_mod( 'ex_why_choose_us_title' );?></h2>
            <p><?php echo get_theme_mod( 'ex_why_choose_us_text_1' );?></p>
            <p><?php echo get_theme_mod( 'ex_why_choose_us_text_2' );?></p>
            <a href="#" class="read-more"><?php echo get_theme_mod( 'ex_why_choose_us_button' );?></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Why Choose Us -->
    <!-- Start Statistics -->
    <div class="stats text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="stat-box">
              <i class="fa fa-user fa-fw fa-5x"></i>
              <span class="number">624</span>
              <p>Happy Clients</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-box">
              <i class="fa fa-heart fa-fw fa-5x"></i>
              <span class="number">624</span>
              <p>Amazing Tours</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-box">
              <i class="fa fa-briefcase fa-fw fa-5x"></i>
              <span class="number">624</span>
              <p>Partners</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-box">
              <i class="fa fa-comments fa-fw fa-5x"></i>
              <span class="number">624</span>
              <p>Questions Answered</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Statistics -->
    <!-- Start Contact Us -->
    <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left">
            <p><?php echo get_theme_mod( 'ex_contact_us_text' );?></p>
          </div>
          <div class="col-md-4 text-center text-md-right">
            <a href="#"><?php echo get_theme_mod( 'ex_contact_us_button' );?></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Us -->
      
<?php get_footer(); ?>
