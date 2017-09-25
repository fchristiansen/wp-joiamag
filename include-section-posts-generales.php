      <div class="row">
             <?php
                 $args = array (
                     'post_type' => 'post',
                     'offset' => -2

                   );
                   $the_query = new WP_Query ($args);
               ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-md-4 mb-3">
                <div class="card">
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
                        <i class="icon-section-features"></i> <?php
                            foreach((get_the_category()) as $category){
                                  echo $category->name;
                              }
                            ?>
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);"><?php the_author(); ?></a> Hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>

      </div><!-- grilla news -->
            <div class="text-center mt-3">
              <button type="button" class="btn btn-secondary btn-lg">
                Cargar más
              </button>
            </div>
