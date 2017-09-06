<?php get_header(); ?>

    <div class="footer-over">
      <div class="site-content">
       <?php
              if (have_posts()) :
                while (have_posts()) :
                  the_post(); ?>
        <img class="img-fluid" src="<?php the_post_thumbnail_url();?>">
        <article class="single-page single-page-no-sidebar">
          <div class="container">
            <div class="header">
              <?php the_title( '<h1>', '</h1>' ); ?>
              <div class="article-meta">
                  En <a href="javascript:void(0);"><?php
                            foreach((get_the_category()) as $category){
                                  echo $category->name;
                              }
                            ?></a> por <a href="javascript:void(0);"><?php the_author( ); ?></a> hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
              </div>
              <div class="share-module share-horizontal">
                <button type="button" class="sh-btn sh-btn-tw">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </button>
                <button type="button" class="sh-btn sh-btn-fb">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>

      <!-- INICIO LOOP  -->
       <?php
         $i = 1;
         $e = 0;
         $bloques = get_order_group('bloque_edicion_tipo'); // guarda el bloque en un array
         foreach($bloques as $bloque){ // recorre cada bloque de edición
             $i = $i +1;
             $e = $e +1;
             if (get('bloque_edicion_tipo', $bloque)) { // sólo sigue si ha seleccionado un tipo de bloque
             if(get('bloque_edicion_tipo', $bloque)=="Foto derecha") { ?>
                 <div class="container">
                     <div class="text-block text-image-right">
                     <div class="row align-items-center">
                       <div class="col-sm">
                           <?php echo get('bloque_edicion_texto', $bloque); ?>
                       </div>
                       <div class="col-sm">
                         <img class="img-fluid" src="<? echo get('bloque_edicion_imagen', $bloque);?>" alt="">
                       </div>
                     </div>
                   </div>
                 </div>

             <? } elseif(get('bloque_edicion_tipo', $bloque)=="Foto izquierda") { ?>
                 <div class="container">
                   <div class="text-block text-image-left">
                     <div class="row align-items-center">
                       <div class="col-sm">
                         <img class="img-fluid" src="<? echo get('bloque_edicion_imagen', $bloque); ?>" alt="">
                       </div>
                       <div class="col-sm">
                           <?php echo get('bloque_edicion_texto', $bloque); ?>
                       </div>
                     </div>
                   </div>
                 </div>

             <? }elseif(get('bloque_edicion_tipo', $bloque)=="Foto centrada") { ?>

               <div class="container">
                 <div class="image-visual with-caption">
                   <div class="container">
                     <div class="row justify-content-md-center">
                       <div class="col col-md-8">
                         <img class="img-fluid" src="<? echo get('bloque_edicion_imagen', $bloque); ?>" alt="">
                         <div class="caption">Foto por <?php echo get('datos_generales_autor_foto', $bloque); ?> </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>


             <? }elseif(get('bloque_edicion_tipo', $bloque)=="Solo texto") { ?>


               <div class="container">
                 <div class="text-block text-block-center">
                   <div class="row justify-content-md-center">
                     <div class="col col-md-8">
                       <?php echo get('bloque_edicion_texto', $bloque);  ?>
                     </div>
                   </div>
                 </div>
               </div>

            <? }elseif(get('bloque_edicion_tipo', $bloque)=="Foto full-width"){ ?>
               <div class="image-visual">
                 <img class="img-fluid" src="<?php echo get('bloque_edicion_imagen', $bloque);?>" alt="">
               </div>

             <? } elseif(get('bloque_edicion_tipo', $bloque)=="Slider") { ?>

                   <div class="container">
                     <div id="carousel-01" class="carousel slide" data-ride="carousel">
                         <div class="carousel-inner" role="listbox">
                           <?
                             $fotos = get_order_field('bloque_edicion_imagen', $bloque); // guarda las fotos en un array
                             $f = 0;
                             foreach ($fotos as $foto) {
                               $f++;
                              ?>
                             <div class="carousel-item <? if( $f==1 ){ echo 'active';}?>" >
                                 <img class="d-block img-fluid" src="<?php echo get('bloque_edicion_imagen',$e,$foto); ?>" alt="">
                             </div>
                               <? } ?>
                         </div>

                         <a class="carousel-control-prev" href="#carousel-01" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="#carousel-01" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                         </a>
                       </div>
                       <!-- carousel -->
                 </div>


             <? } elseif(get('bloque_edicion_tipo', $bloque)=="Cita grande") { ?>

               <div class="container">
                 <div class="lead">
                   <?php echo get('bloque_edicion_texto', $bloque); ?>
                 </div>
               </div>

            <? } ?>
          <? } ?>
         <? } ?>

      <?php
       endwhile;
       endif;
       ?>


            <div class="container">
              <div class="share-module share-horizontal mt-3 mb-3">
                <button type="button" class="sh-btn sh-btn-tw">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </button>
                <button type="button" class="sh-btn sh-btn-fb">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </button>
            </div>
          </div>
        </article>

      </div>
      <!-- site content -->
      <div id="disqus" class="mt-5 mb-0 text-center">
        <div class="row justify-content-md-center">
            <div class="col col-md-8">
               <?php comments_template(); ?>
            </div>
        </div>
      </div>

      <div id="recommended" class="jumbotron mb-0 text-center">
        <p>contenidos recomendados</p>
      </div>
  </div>

<?php get_footer(); ?>
