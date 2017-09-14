<section class="sidebar">
      <div class="widget popular-posts">
        <h2 class="title">Lo más visto</h2>
        <?php
          $args = array(
              'limit' => 4,
              'range' => 'monthly',
              'freshness' => 1,
              'order_by' => 'views',
              'post_type' => 'post',
              'thumbnail_width' => 70,
              'thumbnail_height' => 50,
              'stats_category' => 1,
              'post_html' =>'
              <li class="teaser">
                  <article>
                    <div class="media">

                      <div class="d-flex mr-3">
                          {thumb}
                      </div>
                      <div class="media-body">
                        <div class="cat">
                          <a href="{url}">{category}</a>
                        </div>
                        <h5 class="mt-0 mb-0">
                          <a href="{url}">
                            {title}
                          </a>
                        </h5>
                      </div>
                    </div>
                   </article>
             </li>'
          );
            wpp_get_mostpopular( $args );
          ?>
      </div>

      <div class="banner-sidebar">
        <?php
           $args = array (
               'post_type' => 'banner_sidebar',
               'posts_per_page' => 1
             );
             $the_query = new WP_Query ($args);
         ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    <?php if(get('tipo_de_banner')=='Imagen con link'){ ?>
            <a href="<?php echo get('tipo_de_banner_enlace'); ?>" target="<?php if(get('enlace_externo')){?> _blank <?php } ?>">
                <img class="img-fluid" src="<?php echo get('tipo_de_banner_imagen') ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
            </a>
		    <?php }else{ ?>
              <?php echo get('tipo_de_banner_codigo') ?>
		    <?php } ?>
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>
      </div>
    </section><!-- end section sidebar -->







