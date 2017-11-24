<?php get_header(); ?>
    <main id="barba-wrapper">
         <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post(); 

                 // Previous/next post navigation.
          
          # get_adjacent_post( $in_same_cat = false, $excluded_categories = '', $previous = true )
          $next_post_obj  = get_adjacent_post( '', '', true );
          $next_post_ID   = isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';
          $next_post_link     = get_permalink( $next_post_ID );
          $next_post_title    = 'Next ❯'; // equals "»"

          $previous_post_obj  = get_adjacent_post( '', '', false );
          $previous_post_ID   = isset( $previous_post_obj->ID ) ? $previous_post_obj->ID : '';
          $previous_post_link     = get_permalink( $previous_post_ID );
          $previous_post_title    = '❮ Previous'; // equals "❮"

          $hostVideo = get('video_host');

                ?>

      <div class="barba-container" data-prev="<?php echo $previous_post_link; ?>" data-next="<?php echo $next_post_link; ?>">
        <div class="footer-over">
        <div class="site-content-tv">
          <div class="container">
            <section class="display-big-tv mb-5">
                      <a class="carousel-control-prev nav prev" href="<?php echo $previous_post_link; ?>">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next nav next" href="<?php echo $next_post_link; ?>">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
              <div class="box-video" data-host="<?php echo $hostVideo;?>">
                <div class="bg-video">
                  <img src="<?php echo get ('video_captura_grande') ?>" class="img-fluid" id="video-img">
                  <div class="btn btn-primary btn-lg bt-play">Ver</div>
                </div>
       
              <div class="embed-responsive embed-responsive-16by9">
               <?php if($hostVideo == 'Vimeo') : ?>
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php echo get('video_id_video'); ?>?color=ffffff&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <?php else : ?>
                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo get('video_id_video'); ?>?rel=0" allowfullscreen></iframe>
                <?php endif;?>
              </div>
              
              </div>
            </section>
            <section class="display-tv-thumbs">
              <div class="row no-gutters">
                    <?
                    $e=0;
                    $f = 0;
                    $bloques = get_order_group('video_miniatura'); // guarda el bloque en un array
                    $nuevos="h=160&w=278&zc=1&q=100";

                    foreach($bloques as $bloque){ // recorre cada bloque de edición
                          $e = $e +1;
                          $f++;
                          $fotos = get_order_field('video_miniatura', $bloque); // guarda las fotos en un array
                          foreach ($fotos as $foto) {
                        ?>
                            <div class="col">
                              <img class="img-fluid" src="<?php echo get_image('video_miniatura', $e, $foto, 0, NULL, $nuevos); ?>">
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
                          En <?php exclude_post_categories("10");//the_category( ', ', '', false); ?> por <?php the_author_posts_link(); ?> Hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                        </div>
                      </div>
                          <?php the_content(); ?>
                    </div>
                  </div>
                </div>
                <div class="share-module share-horizontal">
                  <button type="button" class="sh-btn sh-btn-tw" data-title="<?php echo get_the_title();?>">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </button>
                  <button type="button" class="sh-btn sh-btn-fb" data-url="<?php the_permalink();?>">
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

 <?php get_footer(); ?>