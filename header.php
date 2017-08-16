<!DOCTYPE html>
<html lang="en">
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

  <body <?php if(is_home()){ ?>class="home"<?php } ?><?php if(is_singular('joia_tv') || is_archive('joia_tv')){ ?>class="joia-tv"<?php } ?>>

    <nav class="navbar navbar-toggleable-md fixed-top <?php if(is_singular('joia_tv') || is_archive('joia_tv')){ ?>navbar-inverse<?php }else{ ?>navbar-light<?php } ?>">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
          <?php if(is_singular('joia_tv') || is_archive('joia_tv')){ ?>
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
            <a class="nav-link active" href="https://www.facebook.com/JOIA-Magazine-10713226317/" target="_blank" title="Facebook">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="https://twitter.com/joiamagazine" target="_blank" title="Twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="http://instagram.com/joiamagazine" target="_blank" title="Instagram">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="https://www.youtube.com/channel/UCa_g0FsYuOVStMTP1wEaQ6Q" target="_blank" title="Youtube">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="http://joiamagazine.tumblr.com/" target="_blank" title="Tumblr">
                <i class="fa fa-tumblr" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="https://vimeo.com/joiamagazine" target="_blank" title="Vimeo">
                <i class="fa fa-vimeo" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="javascript:void(0);" title="Search" data-toggle="modal" data-target="#modal-search">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </nav>
        </div>
      </div>
    </nav>