<?php get_header(); ?>

    <div class="footer-over">
      <div class="site-content-tv">
        <div class="container">

          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
          <section class="display-big-tv mb-5">
            <?php
              $prev = get_permalink(get_adjacent_post(false,'',false));
              $next = get_permalink(get_adjacent_post(false,'',true));  ?>

                    <a class="carousel-control-prev" href="<?php echo $prev; ?>" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="<?php echo $next; ?>"  role="button" data-slide="next">
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

<?php get_footer(); ?>
