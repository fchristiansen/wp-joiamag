<?
/*

Template name: Puntos de Venta

*/
?>
<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-puntos-de-venta">
        <div class="container">
          <?php
          if (have_posts()) :
          	while (have_posts()) :
          		the_post(); ?>
          <div class="page-heading-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="text-block text-block-center text-center">
            <div class="row justify-content-md-center">
              <div class="col col-md-8">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
        <?php
          	endwhile;
          endif;
        ?>
        <div class="image-visual">
<!--           <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/map.jpg" alt=""> -->
        <div style="height:500px;" id="map-canvas"></div>
        </div>
        <div class="joia-stores">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h2>Santiago</h2>
                <?php
                   $args = array (
                       'post_type' => 'punto_de_venta',
                       'order' => 'DESC',
                       'tax_query' => array(
                           array(
                               'taxonomy' => 'localizacion',
                               'field'    => 'slug',
                               'terms' => 'santiago'
                         )
                       )
                     );
                    $the_query = new WP_Query ($args);
                    $ul = "<ul id='puntoslist' style='display:none;'>";
                 ?>
                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php //obtener cordenadas
                  $lat = get('direccion_latitud');
                  $long = get('direccion_longitud');
                  $direccion_ubicacion_mapa = get('direccion_ubicacion_mapa');
                ?>
                <div class="store-item">
                  <div class="title"><?php the_title(); ?></div>
                  <a class="text-direccion mb-0 clearfix" href="<?php echo $direccion_ubicacion_mapa; ?>" target="_blank" data-x="<?php echo $lat;?>" data-y="<?php echo $long;?>">
                    <?php 
                    $dir = get('direccion_texto_direccion'); 
                    echo $dir;?>
                  </a>
                  <?php 
                   $web_url_tienda = get('web_url_tienda');
                   $web_texto_amigable_url = get('web_texto_amigable_url');
                  ?>
                  <a class="text-url" href="<?php echo $web_url_tienda; ?>" target="_blank"><?php echo $web_texto_amigable_url; ?></a>
                </div>
             <?php 
             
              $ul.="<li data-x='".$lat."' data-y='".$long."' data-name='".get_the_title()."' data-url-tienda='".$web_url_tienda."' data-url-maps='".$direccion_ubicacion_mapa."' >".$dir."</li>";


             endwhile; else: ?>
             <?php endif; ?>
             <?php wp_reset_postdata() ?>
              </div>
              <div class="col-sm-6">
                <h2>Regiones</h2>

                   <?php
                      $args = array (
                          'post_type' => 'punto_de_venta',
                          'order' => 'DESC',
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'localizacion',
                                  'field'    => 'slug',
                                  'terms' => 'regiones'
                            )
                          )
                        );
                       $the_query = new WP_Query ($args);
                    ?>
                   <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                   <div class="store-item">
                     <div class="title"><?php the_title(); ?></div>
                     <?
                        $e=0;
                        $f = 0;
                        $bloques = get_order_group('direccion_texto_direccion');
                        $web_url_tienda = get('web_url_tienda'); 
                        foreach($bloques as $bloque){
                              $e = $e +1;
                              $f++;
                              $direcciones = get_order_field('direccion_texto_direccion', $bloque);
                              foreach ($direcciones as $direccion) {
                              //obtener cordenadas
                              $lat = get('direccion_latitud', $e ,$direccion);
                              $long = get('direccion_longitud', $e ,$direccion);
                              $direccion_ubicacion_mapa = get('direccion_ubicacion_mapa', $e, $direccion);
                            ?>
                           <a class="text-direccion mb-0 clearfix" href="<?php echo get('direccion_ubicacion_mapa', $e ,$direccion); ?>" target="_blank" data-x="<?php echo $lat;?>" data-y="<?php echo $long;?>">
                            <?php 
                              $dir = get('direccion_texto_direccion', $e ,$direccion);
                              echo $dir;
                             ?>
                           </a>
                        <? 
                         
                           $ul.="<li data-x='".$lat."' data-y='".$long."' data-name='".get_the_title()."' data-url-tienda='".$web_url_tienda."' data-url-maps='".$direccion_ubicacion_mapa."' >".$dir."</li>";
                        } ?>
                      <? } ?>
                     <a class="text-url" href="<?php echo $web_url_tienda; ?>" target="_blank"><?php echo get('web_texto_amigable_url'); ?></a>
                   </div>
                <?php 
               
                endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>
              <?php $ul.="</ul>";?>
              <?php echo $ul;?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

<?php get_footer(); ?>
