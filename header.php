<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png">
    <title>Joia</title>
    <!-- Bootstrap core CSS -->
	<?php wp_head(); ?>
    <!-- Custom styles for this template -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php if(is_home()){ ?> class="home" <?php } ?>
        <?php if(is_singular('joia_tv') || is_post_type_archive('joia_tv')){ ?> class="joia-tv" <?php } ?>
        <?php if(is_post_type_archive('mixtape')){ ?> class="mixtapes-2" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" <?php } ?>
        <?php if(is_singular('mixtape')){ ?> class="mixtapes" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" <?php } ?>>

    <nav class="navbar navbar-toggleable-md fixed-top <?php if(is_post_type_archive('mixtape')){ ?> hidden <?php } ?><?php if(is_singular('joia_tv') || is_post_type_archive('joia_tv') || is_singular('mixtape')){ ?>navbar-inverse<?php }else{ ?>navbar-light<?php } ?>">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
          <?php if(is_singular('joia_tv') || is_post_type_archive('joia_tv') || is_singular('mixtapes') || is_post_type_archive('mixtapes')){ ?>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/logo-joia-white.svg">
          <?php }else{ ?>
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/logo-joia.svg">
          <?php } ?>
        </a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="javascript:void(0);">
                Categorías <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url'); ?>/somos">
                Somos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url'); ?>/puntos-de-venta/">
                Puntos de venta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url'); ?>/ediciones">
                Ediciones
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);">
                Revista
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url'); ?>/contacto">
                Contacto
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);">
                Tienda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url'); ?>/mixtapes">
                Mixtapes
              </a>
            </li>
          </ul>

                  <nav class="nav nav-redes">
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
                      <a class="nav-link" href="<?php echo get('facebook');?>" target="_blank" title="Facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                      <? } ?>
                      <? if(get('twitter')){ ?>
                      <a class="nav-link" href="<?php echo get('twitter');?>" target="_blank" title="Twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                      <? } ?>
                      <? if(get('instagram')){ ?>
                      <a class="nav-link" href="<?php echo get('instagram');?>" target="_blank" title="Instagram">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                      <? } ?>
                      <? if(get('youtube')){ ?>
                      <a class="nav-link" href="<?php echo get('youtube');?>" target="_blank" title="Youtube">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                      </a>
                      <? } ?>
                      <? if(get('tumblr')){ ?>
                      <a class="nav-link" href="<?php echo get('tumblr');?>" target="_blank" title="Tumblr">
                        <i class="fa fa-tumblr" aria-hidden="true"></i>
                      </a>
                      <? } ?>
                      <? if(get('vimeo')){ ?>
                      <a class="nav-link" href="<?php echo get('vimeo');?>" target="_blank" title="Vimeo">
                        <i class="fa fa-vimeo" aria-hidden="true"></i>
                      </a>
                      <? } ?>
                      <?
                        endwhile;
                        }
                      ?>
                      <?php wp_reset_postdata() ?>

                    <a class="nav-link" href="javascript:void(0);" title="Search" data-toggle="modal" data-target="#modal-search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </nav>
        </div>
      </div>
    </nav>
