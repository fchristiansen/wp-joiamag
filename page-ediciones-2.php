<?
/*

Template name: Ediciones 2

*/
?>
<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-ediciones">
        <div class="container">
        <?php
           $args = array (
               'post_type' => 'ediciones',
               'posts_per_page' => 10
             );
             $the_query = new WP_Query ($args);
         ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <div class="video-hero">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php echo get('detalles_id_video'); ?>" allowfullscreen></iframe>

<!--               <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/43041966" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
 -->
            </div>
          </div>
          <div class="page-heading-title">
            <?php the_title( '<h1>', '</h1>'); ?>
            <div class="date"><?php echo get('detalles_fecha'); ?></div>
          </div>
          <?php echo get('detalles_autores'); ?>

        <!--  <ul class="list-inline list-people">
            <li class="list-inline-item">Kaws</li>
            <li class="list-inline-item">Maria Jose Carlier</li>
            <li class="list-inline-item">Paul Kaptein</li>
            <li class="list-inline-item">Kaws</li>
            <li class="list-inline-item">Maria Jose Carlier</li>
            <li class="list-inline-item">Paul Kaptein</li>
            <li class="list-inline-item">Maria Jose Carlier</li>
            <li class="list-inline-item">Paul Kaptein</li>
            <li class="list-inline-item">Maria Jose Carlier</li>
            <li class="list-inline-item">Paul Kaptein</li>
            <li class="list-inline-item">Maria Jose Carlier</li>
            <li class="list-inline-item">Paul Kaptein</li>
          </ul> -->
          <div class="text-block text-block-center text-center">
            <div class="row justify-content-md-center">
              <div class="col col-md-8">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <div class="image-visual">
            <img class="img-fluid" src="<?php get_the_post_thumbnail_url(); ?>" alt="">
          </div><!-- img grande -->


          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="card card-capture">
                <div class="card-body">
                  <a href="javascript:void(0);">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/edicion-capture.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="card card-capture">
                <div class="card-body">
                  <a href="javascript:void(0);">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/edicion-capture.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="card card-capture">
                <div class="card-body">
                  <a href="javascript:void(0);">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/edicion-capture.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="card card-capture">
                <div class="card-body">
                  <a href="javascript:void(0);">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/edicion-capture.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="card card-capture">
                <div class="card-body">
                  <a href="javascript:void(0);">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/edicion-capture.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="card card-capture">
                <div class="card-body">
                  <a href="javascript:void(0);">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/edicion-capture.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="card card-capture">
                <div class="card-body">
                  <a href="javascript:void(0);">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/edicion-capture.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="card card-capture">
                <div class="card-body">
                  <a href="javascript:void(0);">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/edicion-capture.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-5 mb-5">
            <a href="" rol="button" class="btn btn-secondary btn-lg">
             comprar
            </a>
          </div>
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
