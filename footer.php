    <footer class="site-footer">
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
