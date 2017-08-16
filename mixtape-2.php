
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Joia</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="mixtapes-2" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="container">
      <div class="heading row row align-items-center">
        <div class="col">
          <div class="logo-mixtapes">
            <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/logo-joia-mixtapes.svg">
          </div>
        </div>
        <div class="col text-right">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>

    <div class="mixtapes-carousel row align-items-center">
      <!-- Set up your HTML -->
      <div class="owl-carousel mix-carousel">
        <div>
          <a href="javascript:void(0);">
            <div class="thumb">
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mix-tape-thumb.jpg">
            </div>
            <div class="song-title">                
              BASSBANGERZ
            </div>
            <div class="counting">
              01/18
            </div>
          </a>
        </div>
        <div>
          <a href="javascript:void(0);">
            <div class="thumb">
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mix-tape-thumb.jpg">
            </div>
            <div class="song-title">                
              BASSBANGERZ
            </div>
            <div class="counting">
              02/18
            </div>
          </a>
        </div>
        <div>
          <a href="javascript:void(0);">
            <div class="thumb">
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mix-tape-thumb.jpg">
            </div>
            <div class="song-title">                
              BASSBANGERZ
            </div>
            <div class="counting">
              03/18
            </div>
          </a>
        </div>
        <div>
          <a href="javascript:void(0);">
            <div class="thumb">
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mix-tape-thumb.jpg">
            </div>
            <div class="song-title">                
              BASSBANGERZ
            </div>
            <div class="counting">
              04/18
            </div>
          </a>
        </div>
        <div>
          <a href="javascript:void(0);">
            <div class="thumb">
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/mix-tape-thumb.jpg">
            </div>
            <div class="song-title">                
              BASSBANGERZ
            </div>
            <div class="counting">
              05/18
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Libraries -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/scrolling-nav.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>

    <script type="text/javascript">
      $('.mix-carousel').owlCarousel({
          center: true,
          items:2,
          loop:false,
          margin:10,
          nav:false,
          responsive:{
              600:{
                  items:4
              }
          }
      });
    </script>
  </body>
</html>
