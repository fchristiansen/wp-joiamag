      <section class="section section-joia-tv">
          <div class="container">
            <h2 class="text-center text-uppercase mb-5">
              Joia TV
            </h2>
            <?php
               $args = array (
                   'post_type' => 'joia_tv',
                   'posts_per_page' => 1,
                   'tax_query' => array(
                       array(
                           'taxonomy' => 'categoria_tv',
                           'field'    => 'slug',
                           'terms' => 'destacado'
                     )
                   )
                 );
                $the_query = new WP_Query ($args);
             ?>
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="card card-tv card-big-tv mb-5">
              <div class="card-img-top">
                <a href="<?php the_permalink(); ?>">
                  <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" title="<?php the_title(); ?>">
                </a>
              </div>
              <div class="card-body">
                <h1 class="card-title">
                  <a href="javascript:void(0);">
                    <?php the_title(); ?>
                  </a>
                </h1>
                <p class="card-author mb-0">
                  <a href="javascript:void(0);"><?php the_author(); ?></a> Hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                </p>
              </div>
            </div>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>

            <div class="row mb-5">
              <?php
                 $args = array (
                     'post_type' => 'joia_tv',
                     'offset' => -1
                   );
                  $the_query = new WP_Query ($args);
               ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-md-4">
                <div class="card card-tv card-small-tv mb-5">
                  <div class="card-img-top">
                    <a href="<?php the_permalink(); ?>">
                      <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
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
            <div class="text-center">
              <a href="<?php bloginfo('url'); ?>/joia_tv" rol="button" class="btn btn-gray">
                Ver todos los videos
              </a>
            </div>
          </div>
        </section>
