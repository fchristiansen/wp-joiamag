<?php get_header(); ?>
    <div class="footer-over">
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

  ?>
<main id="barba-wrapper">
  <div class="barba-container" data-prev="<?php echo $previous_post_link; ?>" data-next="<?php echo $next_post_link; ?>">

      <section class="mixtape-hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <a class="mixtape-control-prev nav prev" href="<?php echo $previous_post_link; ?>">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="mixtape-control-next nav next" href="<?php echo $next_post_link; ?>">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <a class="mixtape-control-down" href="#site-content">
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
                      Por <?php the_author_posts_link(); ?> <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
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
                <div class="caja-embed">
                   <?php echo get('detalles_mixtape_codigo_embed'); ?>
                </div>
                <!-- caja embed -->
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
                    <button type="button" class="sh-btn sh-btn-tw" data-title="<?php echo get_the_title();?>">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="sh-btn sh-btn-fb" data-url="<?php the_permalink();?>">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </button>
                  </li>
                 <!--  <li>
                    <button type="button" class="sh-btn sh-btn-yt">
                      <i class="fa fa-youtube" aria-hidden="true"></i>
                    </button>
                  </li> -->
                </ul>
              </div>
              <!-- share modules -->
            </div>
           <?php
             endwhile;
              endif;
            ?>
            <!-- relacionado -->
            <div class="col-md-9">
              <div class="features-related hide">
                <div class="row">
                      <?php $orig_post = $post;
                      global $post;
                      $tags = wp_get_post_tags($post->ID);
                      if ($tags) {
                        $tag_ids = array();
                        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

                        $args=array(
                          'post_type'     => array('mixtape','post'),
                          'tag__in'       => $tag_ids,
                          'post__not_in'    => array($post->ID),
                          'posts_per_page'  => 4
                        );

                        $my_query = new WP_Query( $args );
                        if( $my_query->have_posts() ) {
                          while( $my_query->have_posts() ) {
                          $my_query->the_post(); ?>
                           <div class="col-lg-6">
                              <div class="media">
                                  <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('related-thumb', array('class' => 'd-flex mr-3 img-fluid' ,'title' => get_the_title())); ?>
                                  </a>
                                <div class="media-body">
                                  <div class="media-meta">
                                    <?php exclude_post_categories("10");//the_category( ', ', '', false); ?>
                                  </div>

                                  <h5 class="mt-0">
                                    <a href="<?php the_permalink(); ?>">
                                      <?php the_title(); ?>
                                    </a>
                                  </h5>
                                </div>
                              </div>
                            </div>
                        <? }
                        }
                      }
                      $post = $orig_post;
                      wp_reset_query(); ?>
                </div> <!-- row -->
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
</main>
    </div>

<?php get_footer(); ?>