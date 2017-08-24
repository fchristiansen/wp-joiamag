          <?php
             $args = array (
                 'post_type' => 'home'
                 //'posts_per_page' => 1

               );
               $the_query = new WP_Query ($args);
           ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="jumbotron jumbotron-hero" style="background-image: url(<?php echo get('banner_medio_imagen'); ?>);">
                <div class="container">
                  <h1><?php echo get('banner_medio_texto'); ?></h1>
                   <p>
                    <a class="btn btn-primary" href="<?php echo get('banner_medio_enlace'); ?>" role="button">
                      <?php echo get('banner_medio_texto_boton'); ?> <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i>
                    </a>
                  </p>
                </div>
              </div>
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata()  ?>
