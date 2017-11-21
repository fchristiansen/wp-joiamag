<?php get_header(); ?>
    <div class="footer-over">
      <div class="site-content">
        <div class="container">
        <?php
           $args = array (
               'post_type' => 'joia_tv',
               'posts_per_page' => 1
             );
             $the_query = new WP_Query ($args);
         ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <section class="display-big-tv mb-5">
            <a class="carousel-control-prev" href="javascript:void(0);" role="button" data-slide="prev" style="display: none;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="javascript:void(0);" role="button" data-slide="next" style="display: none;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <div class="box-video">
              <div class="bg-video" style="background-image: url(<?php echo get ('video_captura_grande') ?>);">
                <div class="btn btn-primary btn-lg bt-play">Ver</div>
              </div>
              <div class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo get('video_id_video'); ?>?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </section>
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>

          <section class="section-more-videos">
            <div class="row">
                <?php
                   $args = array (
                       'post_type' => 'joia_tv',
                       'posts_per_page' => 8,
                       'offset' => 1
                     );
                     $the_query = new WP_Query ($args);
                 ?>
                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <div class="col-md-3">
                    <div class="card card-video mb-5">
                      <div class="card-img-top">
                        <a href="<?php the_permalink(); ?>">
                          <i class="fa fa-play-circle-o play-icon" aria-hidden="true"></i>
                          <img class="img-fluid" src="<?php echo get('video_captura_grande'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                        </a>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title">
                          <a href="<?php the_permalink(); ?>">
                              <?php the_title(); ?>
                          </a>
                        </h1>
                      </div>
                    </div>
                  </div>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>
            </div>
            <div class="text-center mt-3 mb-3">
              <button type="button" class="btn btn-primary btn-md">
                Cargar más
              </button>
            </div>
          </section>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
