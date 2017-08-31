<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-ediciones">
        <div class="container">
        <?php
           $args = array (
               'post_type' => 'ediciones',
               'posts_per_page' => 1
             );
             $the_query = new WP_Query ($args);
         ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="ediciones-hero">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="main-edicion-picture">
                  <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
              </div>
              <div class="col-md-6">

                <?php the_title('<h1>','</h1>'); ?>
                <p><?php echo get('detalles_fecha'); ?></p>
                <ul class="list-unstyled">
                  <?
                  $f = 0;
                  $bloques = get_order_group('detalles_contenido');
                  foreach($bloques as $bloque){
                        $e = $e +1;
                        $f++;
                        $nombres = get_order_field('detalles_contenido', $bloque); // guarda las fotos en un array
                        foreach ($nombres as $nombre) {
                         ?>
                              <li><?php echo get('detalles_contenido',$e ,$nombre); ?></li>
                         <? } ?>
                    <? } ?>
                </ul>
                <div>
                  <button type="button" class="btn btn-black">Comprar ahora</button>
                </div>
              </div>
            </div>
          </div>
          <!-- ultima edicion -->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>

          <div class="row">
          <?php
             $args = array (
                 'post_type' => 'ediciones',
                 'offset' => 1,
                 'posts_per_page' => 8
               );
               $the_query = new WP_Query ($args);
           ?>
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-6 col-sm-3">
              <div class="card card-edicion">
                <div class="card-img-top">
                  <a href="<?php the_permalink(); ?>">
                    <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                  </a>
                </div>
                <div class="card-body">
                  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p class="date"><?php echo get('detalles_fecha'); ?></p>
                </div>
              </div>
            </div>

            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
          </div>

          <div class="text-center mt-3">
            <button type="button" class="btn btn-secondary btn-lg">
              Cargar más
            </button>
          </div>
        </div>

      </div>
    </div>

<?php get_footer(); ?>
