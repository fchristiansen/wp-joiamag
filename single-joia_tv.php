<?php get_header(); ?>

    <div class="footer-over">
      <div class="site-content-tv">
        <div class="container">

        <?php
           $args = array (
               'post_type' => 'joia_tv',
               'posts_per_page' => 1

             );
            $the_query = new WP_Query ($args);
         ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


          <section class="display-big-tv mb-5">
            <a class="carousel-control-prev" href="javascript:void(0);" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="javascript:void(0);" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <div class="box-video">
              <div class="bg-video" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/big-tv.jpg);">
                <div class="btn btn-primary btn-lg bt-play">Ver</div>
              </div>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </section>

          <section class="display-tv-thumbs">
            <div class="row no-gutters">
              <div class="col">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/thumb-joia-tv.jpg">
              </div>
              <div class="col">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/thumb-joia-tv.jpg">
              </div>
              <div class="col">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/thumb-joia-tv.jpg">
              </div>
              <div class="col">
                <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/thumb-joia-tv.jpg">
              </div>
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
                        En <a href="">Musica</a> por <a href="javascript:void(0);">JOIA STAFF</a> hace 5 dias
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
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>
        </div>
      </div>

      <div id="disqus" class="jumbotron mt-5 mb-0 text-center">
        <?php comments_template(); ?>
      </div>
    </div>

<?php get_footer(); ?>
