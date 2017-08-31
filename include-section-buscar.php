 <?php
         $args = array (
             'post_type' => 'home'
             //'posts_per_page' => 1

           );
           $the_query = new WP_Query ($args);
       ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="jumbotron jumbotron-newsletter" style="background-image: url(<?php echo get('caja_buscar_imagen'); ?>);">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <h1 class="text-center"><?php echo get('caja_buscar_texto'); ?></h1>
                <form action="<? bloginfo('url'); ?>" method="get" accept-charset="utf-8">
                  <div class="input-group">
                    <input type="text" name="s" class="form-control" placeholder="Buscar...">
                     <span class="input-group-btn">
                      <button class="btn btn-black" type="button">Enviar</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_postdata()  ?>
