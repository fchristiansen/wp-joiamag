 <section class="section news-features">
            <div class="row posts">
                  <?php
                      if (have_posts()) :
                        while (have_posts()) :
                          the_post(); ?>
                      <div class="col-md-3 mb-3 post">
                        <div class="card">
                          <div class="card-img-top">
                            <a href="<?php the_permalink(); ?>">
                              <!-- <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt=""> -->
                               <?php
                               $post_type = get_post_type();
                               if($post_type == 'product') : ?>
                                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                              <?php else :

                                  if (class_exists('MultiPostThumbnails')) :
                                  MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'imagen-destacada-secundaria');
                                  endif;
                              endif;    
                              ?>
                            </a>
                          </div>
                          <div class="card-body">
                            <p class="card-meta mb-0">
                              <a href="<?php the_permalink(); ?>">
                                <i class="icon-section-features"></i> <?php echo single_cat_title(); ?>
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
           
            <nav class="woocommerce-pagination">
              <?php posts_nav_link( ' &#183; ', '<', '>' ); ?>
            </nav>
            </div>