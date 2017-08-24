  <section class="section bg-gray-lightest section-store">
          <div class="container">
          <?php
                 $args = array (
                     'page_id' => 52
                     //'posts_per_page' => 4

                   );
                   $the_query = new WP_Query ($args);
               ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php the_title( '<h2 class="text-uppercase">', '</h2>'); ?>
            <div class="mb-5">
               <?php the_content(); ?>
            </div>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php wp_reset_postdata()  ?>

              <div class="owl-carousel owl-theme store-carousel mb-5">

                        <?php
                             $args = array (
                                 'post_type' => 'tienda',
                                 'posts_per_page' => 10
                               );
                               $the_query = new WP_Query ($args);
                           ?>
                        <div class="item">
                          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                          <a href="<?php the_permalink(); ?>">
                            <img src=" <?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title(); ?>">
                          </a>
                        </div>
                      <?php endwhile; else: ?>
                      <?php endif; ?>
                      <?php wp_reset_postdata()  ?>

              </div>

            <a href="http://joiamagazine.com/tienda/" rol="button" class="btn btn-white">
              Ir a la tienda
            </a>

          </div>
        </section>
