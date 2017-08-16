<?php get_header(); ?>

    <div class="footer-over">
      <div class="home-content">
      <?php
            $args = array (
                'category_name' => 'destacado',
                'posts_per_page' => 1

               // 'p' => '83'
              );
              $the_query = new WP_Query ($args);
          ?>
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="jumbotron jumbotron-100vh" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h1><?php the_title(); ?></h1>

                    <p>
                      <a class="btn btn-primary" href="<?php the_permalink();?>" role="button">

                        Ver más <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        <!-- end loop -->

        <section class="section news-features">
          <div class="container">
            <div class="row">
              <div class="col-md mb-5">
                <div class="card">
                  <div class="card-img-top">
                    <a href="javascript:void(0)">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-meta mb-0">
                      <a href="http://todo.seo2.cl/clientes/joia/wp/2017/06/30/entrevista/">
                        <i class="icon-section-features"></i> Entrevista
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit amet consectetur elit.
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md mb-5">
                <div class="card">
                  <div class="card-img-top">
                    <a href="javascript:void(0)">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/img-article.jpg" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-meta mb-0">
                      <a href="javascript:void(0);">
                        <i class="icon-section-features"></i> Noticias
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit amet consectetur elit.
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
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
                        <i class="icon-section-features"></i> Noticias
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
                    </p>
                  </div>
                </div>
              </div>
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
                        <i class="icon-section-features"></i> Noticias
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit amet consectetur
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
                    </p>
                  </div>
                </div>
              </div>
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
                        <i class="icon-section-features"></i> Noticias
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
                    </p>
                  </div>
                </div>
              </div>
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
                        <i class="icon-section-features"></i> Noticias
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit amet
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
                    </p>
                  </div>
                </div>
              </div>
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
                        <i class="icon-section-features"></i> Noticias
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor sit amet consectetur elit.
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
                    </p>
                  </div>
                </div>
              </div>
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
                        <i class="icon-section-features"></i> Noticias
                      </a>
                    </p>
                    <h1 class="card-title">
                      <a href="javascript:void(0);">
                        Lorem ipsum dolor
                      </a>
                    </h1>
                    <p class="card-author mb-0">
                      <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
                    </p>
                  </div>
                </div>
              </div>
            </div>
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
                'category_name' => 'destacado',
                'posts_per_page' => 1

               // 'p' => '83'
              );
              $the_query = new WP_Query ($args);
          ?>
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="jumbotron jumbotron-hero" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/bg-jumbo-article.png);">
          <div class="container">
            <h1>Lorem ipsum dolor sit amet consectetur elit.</h1>
            <p>
              <a class="btn btn-primary" href="javascript:void(0);"
                role="butt
              on">
                Ver más <i class="fa fa-fw fa-arrow-right" aria-hidden="true"></i>
              </a>
            </p>
          </div>
        </div>

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
                  <a href="javascript:void(0);">Adriana Conde</a> Hace 3 dias
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

        <div class="jumbotron jumbotron-newsletter" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/bg-jumbo-article.png);">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <h1 class="text-center">Lorem ipsum dolor sit amet consectetur elit.</h1>
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
      </div>
    </div>

<?php get_footer(); ?>
