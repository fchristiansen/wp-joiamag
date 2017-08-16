<?
/*

Template name: Somos

*/
?>
<?php get_header(); ?>
    
    <div class="footer-over">
      <div class="page page-content page-somos">
        <div class="container">
	    <?php
          if (have_posts()) :
          	while (have_posts()) :
          		the_post(); ?>
          <div class="page-heading-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="text-block text-block-center text-center">
            <div class="row justify-content-md-center">
              <div class="col col-md-8">
                <?php the_content(); ?>                 
              </div>
            </div>
          </div>
          <div class="image-visual">
            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/somos.jpg" alt="">
          </div>
          <div class="joia-people">
            <div class="row justify-content-center joia-main-people">
              <div class="col-sm-8 col-md-6 col-lg-5">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h5>Alvaro Fierro</h5>
                    <p>Director / Editor General</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>              
              </div>
              <div class="col-sm-8 col-md-6 col-lg-5">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h5 class="mt-0">Alvaro Fierro</h5>
                    <p>Director / Editor General</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-md-6 col-lg-5">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h5>Alvaro Fierro</h5>
                    <p>Director / Editor General</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>              
              </div>
              <div class="col-sm-8 col-md-6 col-lg-5">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h5 class="mt-0">Alvaro Fierro</h5>
                    <p>Director / Editor General</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center joia-other-people">
              <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h6 class="mt-0">Alvaro Fierro</h6>
                    <p>Comunicación &amp; Marketing</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h6 class="mt-0">Alvaro Fierro</h6>
                    <p>Comunicación &amp; Marketing</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h6 class="mt-0">Alvaro Fierro</h6>
                    <p>Comunicación &amp; Marketing</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h6 class="mt-0">Alvaro Fierro</h6>
                    <p>Comunicación &amp; Marketing</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h6 class="mt-0">Alvaro Fierro</h6>
                    <p>Comunicación &amp; Marketing</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php bloginfo('template_url'); ?>/assets/img/somos-thumb.jpg" alt="Somos">
                  <div class="media-body align-self-center">
                    <h6 class="mt-0">Alvaro Fierro</h6>
                    <p>Comunicación &amp; Marketing</p>
                    <p><a href="javascript:void(0);">alvaro@joiamagazine.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php  	
          	endwhile;
          endif;
        ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>