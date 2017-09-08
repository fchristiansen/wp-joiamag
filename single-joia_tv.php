<?php get_header(); ?>
    <main id="barba-wrapper">
         <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>

      <div class="barba-container" data-prev="<?php echo $prev; ?>" data-next="<?php echo $next; ?>">
        <div class="footer-over">
        <div class="site-content-tv">
          <div class="container">
            <section class="display-big-tv mb-5">
                      <a class="carousel-control-prev nav prev" href="<?php echo $prev; ?>" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next nav next" href="<?php echo $next; ?>"  role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
              <div class="box-video">
                <div class="bg-video" style="background-image: url(<?php echo get ('video_captura_grande') ?>);">
                  <div class="btn btn-primary btn-lg bt-play">Ver</div>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo get('video_id_video'); ?>?rel=0" allowfullscreen></iframe>
                </div>
              </div>
            </section>
            <section class="display-tv-thumbs">
              <div class="row no-gutters">
                    <?
                    $e=0;
                    $f = 0;
                    $bloques = get_order_group('video_miniatura'); // guarda el bloque en un array
                    foreach($bloques as $bloque){ // recorre cada bloque de edición
                          $e = $e +1;
                          $f++;
                          $fotos = get_order_field('video_miniatura', $bloque); // guarda las fotos en un array
                          foreach ($fotos as $foto) {
                        ?>
                            <div class="col">
                              <img class="img-fluid" src="<?php echo get('video_miniatura',$e ,$foto); ?>">
                            </div>
                         <? } ?>
                    <? } ?>
              </div>
            </section>

            <article class="single-page-tv">
              <div class="single-page-content">
                <div class="text-block">
                  <div class="row justify-content-md-center">
                    <div class="col col-md-8">
                      <div class="header">
                        <h1><?php the_title(); ?></h1>
                        <h2>Dirigido por <?php echo get('video_director'); ?></h2>
                        <div class="article-meta">
                          En <a href=""><?php
                              foreach((get_the_category()) as $category){
                                    echo $category->name;
                                }
                              ?></a> por <a href="javascript:void(0);"><?php the_author(); ?></a> Hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                        </div>
                      </div>
                          <?php the_content(); ?>
                    </div>
                  </div>
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
            </article>
              <?php
              endwhile;
                endif;
              ?>
          </div>
        </div>
          <div id="disqus" class="jumbotron mt-5 mb-0 text-center">
            <?php comments_template(); ?>
          </div>
          </div>
        <!-- footer-over -->
      </div>
      <!-- barba-container -->
  </main>

        <footer class="site-footer <?php if(is_archive('mixtape')){ ?> hidden<?php } ?>">
          <section class="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-3">
                  <?php
                     $args = array (
                         'post_type' => 'footer',
                         'posts_per_page' => 1
                       );
                       $the_query = new WP_Query ($args);
                   ?>
                    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <div class="logo mb-5">
                        <a href="javascript:void(0);">
                          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/logo-joia.svg">
                        </a>
                      </div>
                    <?php the_content(); ?>
                    <?php echo get('datos_direccion'); ?> <br><?php echo get('datos_mail'); ?> / <?php echo get('datos_telefono'); ?>
                    <?php endwhile; else: ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata()  ?>
                  <ul class="list-inline">

                          <?
                            $rrss = array(
                              'post_type'     => 'redes_sociales',
                              'posts_per_page'  => '1'
                            );
                            $query = new WP_Query( $rrss );
                            if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) : $query->the_post();
                          ?>

                          <? if(get('facebook')){ ?>
                           <li class="list-inline-item">
                            <a href="<?php echo get('facebook');?>" target="_blank" title="Facebook">
                              <i class="fa fa-fw fa-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <? } ?>
                          <? if(get('twitter')){ ?>
                            <li class="list-inline-item">
                              <a href="<?php echo get('twitter');?>" target="_blank" title="Twitter">
                                <i class="fa fa-fw fa-twitter" aria-hidden="true"></i>
                              </a>
                            </li>
                          <? } ?>
                          <? if(get('instagram')){ ?>
                            <li class="list-inline-item">
                              <a href="<?php echo get('instagram');?>" target="_blank" title="Instagram">
                                <i class="fa fa-fw fa-instagram" aria-hidden="true"></i>
                              </a>
                            </li>
                          <? } ?>
                          <? if(get('youtube')){ ?>
                            <li class="list-inline-item">
                              <a href="<?php echo get('youtube');?>" target="_blank" title="Youtube">
                                <i class="fa fa-fw fa-youtube-play" aria-hidden="true"></i>
                              </a>
                            </li>
                          <? } ?>
                          <? if(get('tumblr')){ ?>
                            <li class="list-inline-item">
                              <a href="<?php echo get('tumblr');?>" target="_blank" title="Tumblr">
                                <i class="fa fa-fw fa-tumblr" aria-hidden="true"></i>
                              </a>
                            </li>
                          <? } ?>
                          <? if(get('vimeo')){ ?>
                            <li class="list-inline-item">
                              <a href="<?php echo get('vimeo');?>" target="_blank" title="Vimeo">
                                <i class="fa fa-fw fa-vimeo" aria-hidden="true"></i>
                              </a>
                            </li>
                          <? } ?>
                          <?
                            endwhile;
                            }
                          ?>
                         <?php wp_reset_postdata() ?>
                          <li class="list-inline-item">
                            <a href="javascript:void(0)" title="Search" data-toggle="modal" data-target="#modal-search">
                              <i class="fa fa-fw fa-search" aria-hidden="true"></i>
                            </a>
                          </li>
                  </ul>
                  <p>JOIA Magazine es creada por</p>
                  <div class="logo">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/logo-joia-studio.svg">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="copyright">
              © <?php the_time('Y'); ?> JOIA Magazine / JOIA Estudio.
          </section>
        </footer>

        <div id="modal-search" class="modal-search modal" tabindex="-1">
          <div class="container">
            <div class="row align-items-center">
              <div class="col">
                <form id="modal-search-form">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-times" aria-hidden="true"></i>
                  </button>
                  <div class="form-group">
                    <input type="text" class="form-control" id="searchInput" autofocus>
                    <span id="modal-search-icon" class="sr-only">buscar</span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      <?php wp_footer(); ?>

</body>
</html>

