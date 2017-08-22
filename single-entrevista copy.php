<?php
              if (have_posts()) :
                while (have_posts()) :
                  the_post(); ?>
                <?php
                  $i = 1;
                  $e = 0;
                  $bloques = get_order_group('bloque_edicion_tipo'); // guarda el bloque en un array
                  foreach($bloques as $bloque){ // recorre cada bloque de edición
                    $i = $i +1;
                    $e = $e +1;
                    if (get('bloque_edicion_tipo', $bloque)) {    // sólo sigue si ha seleccionado un tipo de bloque

                      if(get('bloque_edicion_tipo', $bloque)=="Foto derecha"){

                        // acá debe ir el html de cada bloque

                        echo get('bloque_edicion_imagen', $bloque); // la foto
                        echo get('bloque_edicion_texto', $bloque); // el texto


                      }elseif(get('bloque_edicion_tipo', $bloque)=="Foto izquierda"){

                        // acá debe ir el html de cada bloque

                        echo get('bloque_edicion_imagen', $bloque); // la foto
                        echo get('bloque_edicion_texto', $bloque); // el texto

                      }elseif(get('bloque_edicion_tipo', $bloque)=="Foto centrada"){

                        // acá debe ir el html de cada bloque

                        echo get('bloque_edicion_imagen', $bloque); // la foto

                      }elseif(get('bloque_edicion_tipo', $bloque)=="Solo texto"){

                        // acá debe ir el html de cada bloque

                        echo get('bloque_edicion_texto', $bloque); // el texto

                      }elseif(get('bloque_edicion_tipo', $bloque)=="Foto full-width"){

                        // acá debe ir el html de cada bloque

                        echo get('bloque_edicion_imagen', $bloque); // la foto

                      }elseif(get('bloque_edicion_tipo', $bloque)=="Slider"){

                        // acá debe ir el html de cada bloque

                        $fotos = get_order_field('bloque_edicion_imagen', $bloque); // guarda las fotos en un array
                        foreach ($fotos as $foto){
                          echo get('bloque_edicion_imagen',$e,$foto);
                        }

                      }elseif(get('bloque_edicion_tipo', $bloque)=="Cita grande"){

                        // acá debe ir el html de cada bloque

                        echo get('bloque_edicion_texto', $bloque); // el texto

                      }
                    }
                  }
                ?>

<?php
    endwhile;
    endif;
    ?>
