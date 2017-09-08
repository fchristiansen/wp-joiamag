<?php get_header(); ?>

    <div class="footer-over">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
      <section class="mixtape-hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <a class="mixtape-control-prev" href="#mixtapesControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="mixtape-control-next" href="#mixtapesControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <a class="mixtape-control-down page-scroll" href="#site-content">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Mixtapes</span>
        </a>
        <div class="artist-hero">
          <h1 class="artist-name"><?php the_title(); ?></h1>
          <div class="clearfix"></div>
          <h2 class="artist-mixtape"><?php echo get('detalles_mixtape_titulo'); ?></h2>
        </div>
      </section>

      <div id="site-content" class="site-content">
        <section class="bg-gray-lightest mixcloud">
        <div class="container">
          <div class="pb-5 pt-5 text-center">
             <?php echo get('mixtape_player_mixcloud'); ?>
          </div>
        </div>
        </section>

        <section class="mixtape-post">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 offset-lg-2">
                <div class="row">
                  <div class="col">
                    <div class="article-meta">
                      Por <a href="javascript:void(0);"><?php the_author(); ?></a> <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                    </div>
                  </div>
                  <div class="col">
                    <ul class="fa-ul artist-networks">
                              <?
                                 $f = 0;
                                 $bloques = get_order_group('redes_texto_del_enlace');
                                 foreach($bloques as $bloque){
                                       $e = $e +1;
                                       $f++;
                                       $redes = get_order_field('redes_texto_del_enlace', $bloque);
                                       foreach ($redes as $red) {
                                     ?>
                                        <li>
                                          <a href="<?php echo get('redes_enlace',$e ,$red); ?>">
                                            <i class="fa fa-li fa-circle" aria-hidden="true"></i><?php echo get('redes_texto_del_enlace',$e ,$red); ?>
                                          </a>
                                        </li>
                              <? } ?>
                            <? } ?>
                    </ul>
                  </div>
                </div>
                <div class="mixtape-post-title">
                  <h3 class="artist-name"><?php the_title(); ?></h3>
                </div>
                <div class="mixtape-post-content">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="main-image">
                   <!-- <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mixtape.jpg"> -->
                    <?php
                        if (class_exists('MultiPostThumbnails')) :
                        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'imagen-destacada-secundaria');
                        endif;
                    ?>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="container mb-5">
          <div class="row">
            <div class="col-md-3">
              <div class="share-module share-vertical">
                <ul class="list-unstyled">
                  <li>
                    <button type="button" class="sh-btn sh-btn-tw">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="sh-btn sh-btn-fb">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="sh-btn sh-btn-yt">
                      <i class="fa fa-youtube" aria-hidden="true"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
           <?php
             endwhile;
              endif;
            ?>

            <?php include(TEMPLATEPATH . '/helpers/related.php'); ?>
            <!-- relacionado -->
            <div class="col-md-9">
              <div class="features-related hide">
                <div class="row">
                  <!-- <div class="col-lg-6">
                    <div class="media">
                      <a href="javascript:void(0);">
                        <img class="d-flex mr-3 img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mixtape-thumb.jpg" alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <a class="media-meta" href="javascript:void(0);">
                          Música
                        </a>
                        <h5 class="mt-0">
                          <a href="javascript:void(0);">
                            Lorem ipsum dolor sit amet consectetur elit.
                          </a>
                        </h5>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-6">
                    <div class="media">
                      <a href="javascript:void(0);">
                        <img class="d-flex mr-3 img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mixtape-thumb.jpg" alt="Generic placeholder image">
                      </a>
                      <div class="media-body">
                        <a class="media-meta" href="javascript:void(0);">
                          Eventos
                        </a>
                        <h5 class="mt-0">
                          <a href="javascript:void(0);">
                            Lorem ipsum dolor sit amet consectetur elit.
                          </a>
                        </h5>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-6">
                    <div class="media">
                      <a href="javascript:void(0);">
                        <img class="d-flex mr-3 img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mixtape-thumb.jpg" alt="Generic placeholder image">
                      </a>

                      <div class="media-body">
                        <a class="media-meta" href="javascript:void(0);">
                          Música
                        </a>
                        <h5 class="mt-0">
                          <a href="javascript:void(0);">
                            Lorem ipsum dolor sit amet consectetur elit.
                          </a>
                        </h5>
                      </div>
                    </div>
                  </div> -->

                </div>
              </div> <!-- relacionado -->
            </div>
          </div>
        </div>
      </div>

      <div id="disqus" class="jumbotron mt-0 mb-0 text-center">
        <div class="container">
          <?php comments_template(); ?>
        </div>

      </div>
    </div>

<?php get_footer(); ?>
