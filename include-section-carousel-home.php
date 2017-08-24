      <div id="carousel-home" class="carousel slide " data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <?php
                   $args = array (
                       'post_type' => 'home'
                       //'posts_per_page' => 1
                     );
                     $the_query = new WP_Query ($args);

                 ?>
                  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <?
                  $f = 0;
                  $bloques = get_order_group('slider_imagen'); // guarda el bloque en un array
                  foreach($bloques as $bloque){ // recorre cada bloque de edición
                   // $i = $i +1;
                    $e = $e +1;
                        $f++;
                        $fotos = get_order_field('slider_imagen', $bloque); // guarda las fotos en un array
                        foreach ($fotos as $foto) {
                         ?>
                          <div class="carousel-item  <? if( $f==1 ){ echo 'active';} ?>">
                            <div class="jumbotron jumbotron-100vh" style="background-image:url(<?php echo get('slider_imagen',$e ,$foto); ?>);">
                                  <div class="container">
                                      <div class="row align-items-center">
                                            <div class="col-md-8">
                                              <h1><?php echo get('slider_texto',$e ,$foto); ?></h1>
                                                <p>
                                                  <a class="btn btn-primary" href="<?php echo get('slider_link',$e ,$foto); ?>" role="button">
                                                    <?php echo get('slider_texto_boton'); ?> <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i>
                                                  </a>
                                              </p>
                                            </div>
                                      </div>
                                  </div>
                            </div>
                          </div>
                          <? } ?>
                    <? } ?>
                    <?php endwhile; else: ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata()?>

                </div>
                <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>
        <!-- carousel home -->
