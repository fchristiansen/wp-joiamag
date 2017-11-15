      <div class="row" id="home-posts">
             <?php
                 $args = array (
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'offset' => 3
                   );
                   $the_query = new WP_Query ($args);
               ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-md-4 mb-3">
                <div class="card post-general">
                  <div class="card-img-top">
                    <a href="<?php the_permalink(); ?>">
                           <?php
                              if (class_exists('MultiPostThumbnails')) :
                              MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'imagen-destacada-secundaria');
                              endif;
                          ?>
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-meta mb-0">
                      <a href="javascript:void(0);">
                        <i class="icon-section-features"></i> <?php the_category( ', ', '', false); ?>
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                       <?php the_author_posts_link(); ?> Hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                    </p>
                  </div>
                </div> <!-- general -->
              </div>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>

      </div><!-- grilla news -->
            <div class="text-center mt-3">
         

              <?php 
              if (  $the_query->max_num_pages > 1 ) :
              echo '<div class="btn btn-secondary btn-md misha_loadmore">Cargar más</div>';
              endif;?>

            </div>
