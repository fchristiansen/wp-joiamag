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
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
          $hostVideo = get('video_host');
          $firstPostID = get_the_ID();
         ?>
          <section class="display-big-tv mb-5">
            <a class="carousel-control-prev" href="javascript:void(0);" role="button" data-slide="prev" style="display: none;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="javascript:void(0);" role="button" data-slide="next" style="display: none;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <div class="box-video" data-host="<?php echo $hostVideo;?>">
              <div class="bg-video">
                 <img src="<?php echo get ('video_captura_grande') ?>" class="img-fluid" id="video-img">
                <div class="btn btn-primary btn-lg bt-play" >Ver</div>
              </div>
              <div class="embed-responsive embed-responsive-16by9">
                <?php if($hostVideo == 'Vimeo') : ?>
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php echo get('video_id_video'); ?>?color=ffffff&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <?php else : ?>
                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo get('video_id_video'); ?>?rel=0" allowfullscreen></iframe>
                <?php endif;?>
              </div>
            </div>
          </section>
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>

          <section class="section-more-videos">
            <div class="row posts">
                <?php
                   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                   
                      $args = array (
                       'post_type' => 'joia_tv',
                       'posts_per_page' => 8,
                       'post__not_in' => array($firstPostID),
                       'paged' => $paged                     
                     );
                   
                     $the_query = new WP_Query ($args);


                ?>
                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <div class="col-md-3 post">
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
                              <?php the_title();?>
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
             <!-- <button type="button" class="btn btn-primary btn-md">
                Cargar más
              </button>-->
              <nav class="woocommerce-pagination">
              <?php 
                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $the_query->max_num_pages,
                      'current'      => max( 1, get_query_var( 'paged' ) ),
                      'format'       => '?paged=%#%',
                      'show_all'     => false,
                      'type'         => 'plain',
                      'end_size'     => 2,
                      'mid_size'     => 1,
                      'prev_next'    => true,
                      'add_args'     => false,
                      'add_fragment' => '',
                  ) );
              ?>
          </nav>
            </div>
          </section>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
