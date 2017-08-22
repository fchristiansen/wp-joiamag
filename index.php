<?php get_header(); ?>

    <div class="footer-over">
      <div class="home-content">
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
                  $i = $i +1;
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
                  <?php wp_reset_postdata() ?>

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

        <section class="section news-features">
          <div class="container">
            <div class="row">
              <?php
                 $args = array (
                     //'post_type' => 'post',
                     'cat' => 'destacado',
                     'posts_per_page' => 2
                     //'posts_per_page' => 1
                   );
                   $the_query = new WP_Query ($args);

               ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-md mb-5">
                <div class="card">
                  <div class="card-img-top">
                    <a href="javascript:void(0)">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-meta mb-0">
                        <i class="icon-section-features"></i> <?php
                            foreach((get_the_category()) as $category){
                                  echo $category->name;
                                //echo category_description($category);
                              }
                            ?>
                            <?php the_category( $separator, $parents, $post_id ); ?>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                       <?php the_title(); ?>
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);"><?php the_author( ); ?></a> Hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                    </p>
                  </div>
                </div>
              </div>
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>

            </div>
            <!-- destacados -->

            <div class="row">
             <?php
                if (have_posts()) :
                  while (have_posts()) :
                    the_post(); ?>
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-img-top">
                    <a href="javascript:void(0)">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-meta mb-0">
                      <a href="javascript:void(0);">
                        <i class="icon-section-features"></i> <?php
                            foreach((get_the_category()) as $category){
                                  echo $category->name;
                                //echo category_description($category);
                              }
                            ?>
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);"><?php the_author(); ?></a>Hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php
               endwhile;
               endif;
               ?>

            </div><!-- grilla news -->

            <div class="text-center mt-3">
              <button type="button" class="btn btn-secondary btn-lg">
                Cargar más
              </button>
            </div>
          </div>
        </section> <!-- news-features -->

            <!-- destacado central -->
          <?php
             $args = array (
                 'post_type' => 'home'
                 //'posts_per_page' => 1

               );
               $the_query = new WP_Query ($args);
           ?>
              <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="jumbotron jumbotron-hero" style="background-image: url(<?php echo get('banner_medio_imagen'); ?>);">
                <div class="container">
                  <h1><?php echo get('banner_medio_texto'); ?></h1>
                  <p>
                    <a class="btn btn-primary" href="<?php echo get('banner_medio_enlace'); ?>" role="button">
                      <?php echo get('banner_medio_texto_boton'); ?> <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i>
                    </a>
                  </p>
                </div>
              </div>
      <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_postdata()  ?>

      <!-- destacado central -->

        <section class="section section-joia-tv">
          <div class="container">
            <h2 class="text-center text-uppercase mb-5">
              Joia TV
            </h2>
            <div class="card card-tv card-big-tv mb-5">
              <div class="card-img-top">
                <a href="<?php bloginfo('url'); ?>/joia_tv/test/">
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/joia-tv.jpg" alt="">
                </a>
              </div>
              <div class="card-body">
                <h1 class="card-title">
                  <a href="javascript:void(0);">
                    Flying Lotus - "Until The Quiet Comes"
                  </a>
                </h1>
                <p class="card-author mb-0">
                  <a href="javascript:void(0);">Adriana Conde</a> Hace 3 días
                </p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-4">
                <div class="card card-tv card-small-tv mb-5">
                  <div class="card-img-top">
                    <a href="javascript:void(0);">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/joia-tv.jpg" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit amet consectetur elit.
                      </a>
                    </h1>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-tv card-small-tv mb-5">
                  <div class="card-img-top">
                    <a href="javascript:void(0);">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/joia-tv.jpg" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit amet consectetur elit.
                      </a>
                    </h1>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-tv card-small-tv mb-5">
                  <div class="card-img-top">
                    <a href="javascript:void(0);">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/joia-tv.jpg" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit amet consectetur elit.
                      </a>
                    </h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <a href="<?php bloginfo('url'); ?>/joia_tv" rol="button" class="btn btn-gray">
                Ver todos los videos
              </a>
            </div>
          </div>
        </section>

        <section class="section bg-gray-lightest section-store">
          <div class="container">
            <h2 class="text-uppercase">
              Tienda
            </h2>
            <p class=" mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae neque id libero lacinia mattis sit amet vel tortor. Donec tristique aliquet aliquam.</p>
            <div class="owl-carousel store-carousel mb-5">
              <div>
                <a href="javascript:void(0);">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/store-item.jpg" alt="">
                </a>
              </div>
              <div>
                <a href="javascript:void(0);">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/store-item.jpg" alt="">
                </a>
              </div>
              <div>
                <a href="javascript:void(0);">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/store-item.jpg" alt="">
                </a>
              </div>
              <div>
                <a href="javascript:void(0);">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/store-item.jpg" alt="">
                </a>
              </div>
              <div>
                <a href="javascript:void(0);">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/store-item.jpg" alt="">
                </a>
              </div>
              <div>
                <a href="javascript:void(0);">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/store-item.jpg" alt="">
                </a>
              </div>
              <div>
                <a href="javascript:void(0);">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/store-item.jpg" alt="">
                </a>
              </div>
            </div>
            <button type="button" class="btn btn-white">
              Ir a la tienda
            </button>
          </div>
        </section>

        <section class="section more-recent-reviews">
          <div class="container">
            <p class="text-uppercase">Lo más leído / Esta semana</h1>
            <div class="row mb-5">
              <div class="col-md-3">
                <article class="card card-section-features">
                  <div class="card-inner">
                    <div class="card-figure">
                      <figure>
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                        </a>
                      </figure>
                      <div class="card-body">
                        <div class="card-meta">
                          <a href="javascript:void(0);">
                            <i class="icon-section-features"></i> Noticias
                          </a>
                        </div>
                        <div class="card-title">
                          <a href="javascript:void(0);">
                            <h1 class="h6">Lorem ipsum elit.</h1>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="card card-section-features">
                  <div class="card-inner">
                    <div class="card-figure">
                      <figure>
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                        </a>
                      </figure>
                      <div class="card-body">
                        <div class="card-meta">
                          <a href="javascript:void(0);">
                            <i class="icon-section-features"></i> Noticias
                          </a>
                        </div>
                        <div class="card-title">
                          <a href="javascript:void(0);">
                            <h1 class="h6">Lorem ipsum elit.</h1>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="card card-section-features">
                  <div class="card-inner">
                    <div class="card-figure">
                      <figure>
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                        </a>
                      </figure>
                      <div class="card-body">
                        <div class="card-meta">
                          <a href="javascript:void(0);">
                            <i class="icon-section-features"></i> Noticias
                          </a>
                        </div>
                        <div class="card-title">
                          <a href="javascript:void(0);">
                            <h1 class="h6">Lorem ipsum elit.</h1>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="card card-section-features">
                  <div class="card-inner">
                    <div class="card-figure">
                      <figure>
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                        </a>
                      </figure>
                      <div class="card-body">
                        <div class="card-meta">
                          <a href="javascript:void(0);">
                            <i class="icon-section-features"></i> Noticias
                          </a>
                        </div>
                        <div class="card-title">
                          <a href="javascript:void(0);">
                            <h1 class="h6">Lorem ipsum elit.</h1>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <p class="text-uppercase">Lo más leído / Este mes</h1>
            <div class="row">
              <div class="col-md-3">
                <article class="card card-section-features">
                  <div class="card-inner">
                    <div class="card-figure">
                      <figure>
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                        </a>
                      </figure>
                      <div class="card-body">
                        <div class="card-meta">
                          <a href="javascript:void(0);">
                            <i class="icon-section-features"></i> Noticias
                          </a>
                        </div>
                        <div class="card-title">
                          <a href="javascript:void(0);">
                            <h1 class="h6">Lorem ipsum elit.</h1>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="card card-section-features">
                  <div class="card-inner">
                    <div class="card-figure">
                      <figure>
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                        </a>
                      </figure>
                      <div class="card-body">
                        <div class="card-meta">
                          <a href="javascript:void(0);">
                            <i class="icon-section-features"></i> Noticias
                          </a>
                        </div>
                        <div class="card-title">
                          <a href="javascript:void(0);">
                            <h1 class="h6">Lorem ipsum elit.</h1>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="card card-section-features">
                  <div class="card-inner">
                    <div class="card-figure">
                      <figure>
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                        </a>
                      </figure>
                      <div class="card-body">
                        <div class="card-meta">
                          <a href="javascript:void(0);">
                            <i class="icon-section-features"></i> Noticias
                          </a>
                        </div>
                        <div class="card-title">
                          <a href="javascript:void(0);">
                            <h1 class="h6">Lorem ipsum elit.</h1>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-3">
                <article class="card card-section-features">
                  <div class="card-inner">
                    <div class="card-figure">
                      <figure>
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                        </a>
                      </figure>
                      <div class="card-body">
                        <div class="card-meta">
                          <a href="javascript:void(0);">
                            <i class="icon-section-features"></i> Noticias
                          </a>
                        </div>
                        <div class="card-title">
                          <a href="javascript:void(0);">
                            <h1 class="h6">Lorem ipsum elit.</h1>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
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
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
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
      </div>
    </div>

<?php get_footer(); ?>


