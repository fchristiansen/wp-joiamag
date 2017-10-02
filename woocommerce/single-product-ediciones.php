<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

?>
<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-ediciones">
        <div class="container">
         <?php
          do_action( 'woocommerce_before_single_product' );
          if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>

          <div class="video-hero">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php echo get('ediciones_id_video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
        <!-- <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/43041966" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            </div>
          </div>
          <div class="page-heading-title">
            <?php the_title( '<h1>', '</h1>'); ?>
            <div class="date"><?php echo get('ediciones_fecha'); ?></div>
          </div>
          <ul class="list-inline list-people">
            <?
            $f = 0;
            $bloques = get_order_group('ediciones_contenido'); // guarda el bloque en un array
            foreach($bloques as $bloque){ // recorre cada bloque de edición
             // $i = $i +1;
                  $e = $e+1;
                  $f++;
                  $nombres = get_order_field('ediciones_contenido', $bloque); // guarda las fotos en un array
                  foreach ($nombres as $nombre) {
                   ?>
                      <li class="list-inline-item"><?php echo get('ediciones_contenido',$e ,$nombre); ?></li>
                 <? } ?>
            <? } ?>
          </ul>
          <div class="text-block text-block-center text-center">
            <div class="row justify-content-md-center">
              <div class="col col-md-8">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <div class="image-visual">
            <img id="captura" class="img-fluid" src="<?php echo get('ediciones_captura_pagina'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
          </div><!-- img grande -->


        <div class="row">
            <?
            $f = 0;
            $e=0;
            $bloques = get_order_group('ediciones_captura_pagina'); // guarda el bloque en un array
            foreach($bloques as $bloque){ // recorre cada bloque de edición
             // $i = $i +1;
                  $e = $e +1;
                  $f++;
                  $fotos = get_order_field('ediciones_captura_pagina', $bloque); // guarda las fotos en un array
                  foreach ($fotos as $foto) {
                   ?>
                      <div class="col-6 col-sm-3">
                        <div class="card card-capture">
                          <div class="card-body">
                            <a href="javascript:void(0);">
                              <img class="img-fluid captura" src="<?php echo get('ediciones_captura_pagina',$e ,$foto); ?>" alt="">
                            </a>
                          </div>
                        </div>
                      </div>
                    <? } ?>
              <? } ?>
        </div>
          <div class="text-center mt-5 mb-5">
            <!--<a href="" rol="button" class="btn btn-secondary btn-lg">
             comprar
            </a>-->
            <form action="" method="post">
              <input name="add-to-cart" type="hidden" value="<?php echo $post->ID ?>" />
              <input name="quantity" type="hidden" value="1" min="1"  />
              <input name="submit" type="submit" value="comprar" class="btn btn-secondary btn-lg" />
            </form>
          </div>
        <?php
            endwhile;
          endif;
        ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
