    <!-- Start Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-6">
            <div class="site-info">
              <h2>
                <span><?php echo get_theme_mod('ex_nav_title_p1'); ?></span>
                <span><?php echo get_theme_mod('ex_nav_title_p2'); ?></span>
              </h2>
              <p><?php echo get_theme_mod('ex_footer_text'); ?></p>
              <a href="#"><?php echo get_theme_mod('ex_footer_button'); ?></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="helpful-links">
              <h2><?php echo get_theme_mod('ex_footer_link'); ?></h2>
              <div class="row">
                <div class="col">
                  <?php 
                  if( has_nav_menu( 'primary' ) ){
                      wp_nav_menu( array(
                          'theme_location'  => 'footer_p1',
                          'depth'           => 0, // 1 = no dropdowns, 2 = with dropdowns,0 all.
                          'container'       => 'ul',
                          'container_class' => 'list-unstyled',
                         
                        ) );
                      }
                  ?>
                </div>
                <div class="col">
                  <?php 
                  if( has_nav_menu( 'primary' ) ){
                      wp_nav_menu( array(
                          'theme_location'  => 'footer_p2',
                          'depth'           => 0, // 1 = no dropdowns, 2 = with dropdowns,0 all.
                          'container'       => 'ul',
                          'container_class' => 'list-unstyled',
                         
                        ) );
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="contact">
              <h2><?php echo get_theme_mod('ex_footer_contact_us'); ?></h2>
              <ul class="list-unstyled">
                <li><?php echo get_theme_mod('ex_adress_handle'); ?></li>
                <li>Phone: 
                <?php 
                  if( get_theme_mod( 'ex_phone_handle' ) ){
                     echo get_theme_mod( 'ex_phone_handle' );
                  }
                ?>
                </li>
                <li>Email: <a href="mailto:info@elitecorp.com?subject=Contact">
                            <?php 
                              if( get_theme_mod( 'ex_gmail_handle' ) ){
                                 echo get_theme_mod( 'ex_gmail_handle' ); 
                              }
                            ?>
                           </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer -->
    <!-- Start Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center text-sm-left text-uppercase">
            Copyright <?php the_time('Y'); ?> guidall Dz &copy;
          </div>
          <div class="col-sm-6 text-center text-sm-right">
            <ul class="list-unstyled">
              <?php 
              if( get_theme_mod( 'ex_facebook_handle' ) ){
                ?>
                <li>
                  <a target="_blank" href="<?php echo get_theme_mod( 'ex_facebook_handle' ); ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <?php
              }
 
              if( get_theme_mod( 'ex_twitter_handle' ) ){
                ?>
                <li>
                  <a target="_blank" href="<?php echo get_theme_mod( 'ex_twitter_handle' ); ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <?php
              }
       
              if( get_theme_mod( 'ex_youtube_handle' ) ){
                ?>
                <li>
                  <a target="_blank" href="<?php echo get_theme_mod( 'ex_youtube_handle' ); ?>">
                    <i class="fa fa-youtube"></i>
                  </a>
                </li>
                <?php
              }
              
              if( get_theme_mod( 'ex_gmail_handle' ) ){
                ?>
                <li>
                  <a target="_blank" href="<?php echo get_theme_mod( 'ex_gmail_handle' ); ?>">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <?php
              }
              ?>  
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Copyright -->

    <!-- Start section loading -->
      
      <section class="loading">
        <div class="spinner"></div>
      </section>  
  
    <!-- Start section loading -->


    <?php wp_footer(); ?>  
     <script>
      new WOW().init();
      </script>
  </body>
</html>    