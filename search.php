<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-resultados">
        <div class="container">
          <div class="page-heading-title">
            <h1>Resultados para: <span><?= $_GET['s']; ?></span></h1>
          </div>
          <section class="section news-features">
            <div class="row">
                  <?php
                      if (have_posts()) :
                        while (have_posts()) :
                          the_post(); ?>
                      <div class="col-md-3 mb-3">
                        <div class="card">
                          <div class="card-img-top">
                            <a href="<?php the_permalink(); ?>">
                              <!-- <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt=""> -->
                               <?php
                                  if (class_exists('MultiPostThumbnails')) :
                                  MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'imagen-destacada-secundaria');
                                  endif;
                              ?>
                            </a>
                          </div>
                          <div class="card-body">
                            <p class="card-meta mb-0">
                              <a href="javascript:void(0);">
                                <i class="icon-section-features"></i> Noticias
                              </a>
                            </p>
                            <h1 class="card-title">
                              <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                              </a>
                            </h1>
                          </div>
                        </div>
                      </div>
                <?php
                    endwhile;
                  endif;
                ?>
            </div>
          </section>
          <div class="text-center mt-3 mb-3">
            <button type="button" class="btn btn-secondary btn-lg">
              Cargar más
            </button>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
