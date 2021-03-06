<?php get_header(); ?>

  <div class="footer-over">
    <div class="site-content">
      <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>

      <article class="single-page width-sidebar">
      <div class="container">
      <?php
        $i = 1;
        $e = 0;
       $bloques = get_order_group('bloque_edicion_tipo'); // guarda el bloque en un array
       foreach($bloques as $bloque){ // recorre cada bloque de edición
          $i = $i +1;
          $e = $e +1;
            if (get('bloque_edicion_tipo', $bloque)) { // sólo sigue si ha seleccionado un tipo de bloque
                  if(get('bloque_edicion_tipo', $bloque)=="Slider") { ?>
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
                  <? } ?>
            <? } ?>
        <? } ?>
      <?php
     endwhile;
     endif;
     ?>

          <div class="row">
	                <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
                <div class="col-md-8">
                  <div class="single-page-content">
                      <?php the_title('<h1>','</h1>'); ?>
                      <div class="row mt-3 mb-5">
                        <div class="col-md-6">
                          <div class="article-meta">
                            En <?php exclude_post_categories("10"); //the_category( ', ', '', false); ?> por <?php the_author_posts_link(); ?>
                            <br> Hace <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="share-module share-horizontal">
                            <button type="button" class="sh-btn sh-btn-tw" data-title="<?php echo get_the_title();?>">
                              <i class="fa fa-twitter" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="sh-btn sh-btn-fb" data-url="<?php the_permalink();?>">
                              <i class="fa fa-facebook" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                        <?php the_content(); ?>
                <?php
                  $i = 1;
                  $e = 0;
                 $bloques = get_order_group('bloque_edicion_tipo'); // guarda el bloque en un array
                 foreach($bloques as $bloque){ // recorre cada bloque de edición
                    $i = $i +1;
                    $e = $e +1;
                    if (get('bloque_edicion_tipo', $bloque)) { // sólo sigue si ha seleccionado un tipo de bloque
                    if(get('bloque_edicion_tipo', $bloque)=="Foto centrada") { ?>

                        <img class="img-fluid" src="<? echo get('bloque_edicion_imagen', $bloque); ?>" alt="<?php the_title(); ?>">

                    <? } elseif(get('bloque_edicion_tipo', $bloque)=="Foto full-width"){ ?>
                         <div class="image-visual">
                           <img class="img-fluid" src="<?php echo get('bloque_edicion_imagen', $bloque);?>" alt="">
                         </div>

                    <? } elseif(get('bloque_edicion_tipo', $bloque)=="Solo texto") { ?>
                          <?php echo get('bloque_edicion_texto', $bloque);  ?>
                     <? } elseif(get('bloque_edicion_tipo', $bloque)=="Video") { ?>
                          <div class="video-container">
                           <?php echo get('bloque_edicion_texto', $bloque);  ?>
                          </div>
                   <? } elseif(get('bloque_edicion_tipo', $bloque)=="Cita grande") { ?>
                         <div class="lead">
                           <?php echo get('bloque_edicion_texto', $bloque); ?>
                         </div>
                   <? } ?>
                 <? } ?>
                <? } ?>
                </div>
             </div> <!-- single page content -->
              <?php
             endwhile;
             endif;
             ?>
            <div class="col-md-4">
              <?php include(TEMPLATEPATH . '/include-section-sidebar.php'); ?>
            </div>
          </div>
          </div>
        </article>
      </div>
      <div id="disqus" class="jumbotron mt-5 mb-0 text-center">
        <div class="container">
                <?php comments_template(); ?>
        </div>
      </div>
         <!-- posts recommendados -->
        <?php include(TEMPLATEPATH . '/include-section-posts-recomendados.php'); ?>
    </div>
<?php get_footer(); ?>
