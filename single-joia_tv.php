<?php get_header(); ?>
    
    <div class="footer-over">
      <div class="site-content-tv">
        <div class="container">
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
                      <h1>Lorem ipsum dolor sit amet consectetur elit consectetur elit</h1>
                      <h2>Dirigido por fernando liberona</h2>
                      <div class="article-meta">
                        En <a href="javascript:void(0);">Musica</a> por <a href="javascript:void(0);">JOIA STAFF</a> hace 5 dias
                      </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla lorem, varius et est at, sagittis interdum ipsum. Cras vitae felis porttitor, vulputate quam vel, porttitor nulla. Aliquam sed hendrerit eros. Duis lacinia augue ac egestas condimentum. Suspendisse potenti. Donec orci mauris, euismod vel fringilla sed, feugiat ac felis. Sed consectetur, est eu vulputate sollicitudin, ligula augue finibus urna, non ultrices lorem felis et augue. Curabitur vitae varius arcu. Vivamus lobortis tristique nunc, facilisis suscipit lectus varius eu.</p>
                    <p class="lead">“Tincidunt et tincidunt sit amet”.</p>
                    <p>Nunc nisi arcu, bibendum vel commodo quis, finibus vitae lacus. Vestibulum vel tincidunt nisi. Suspendisse tincidunt, risus sed sagittis vestibulum, diam urna pulvinar lectus, non fermentum lorem dolor non ante. Curabitur laoreet enim quis porta pharetra. Proin interdum nulla in leo euismod, id vestibulum orci volutpat. Vivamus imperdiet sapien id convallis venenatis. Nam rhoncus, elit quis suscipit cursus, risus purus volutpat odio, quis venenatis lectus erat a nunc. Nunc ac aliquam nisi. Nullam sit amet lacus eu lacus efficitur auctor. Praesent vel est ac magna ultrices consequat.</p>
                    <p>Vivamus porttitor ipsum at augue porttitor, ac volutpat erat pulvinar. Suspendisse porta aliquet risus, nec viverra lorem iaculis ac. Mauris convallis dictum turpis quis lobortis. Quisque vitae commodo augue. Integer fringilla, turpis vitae mollis molestie.</p>  
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
        </div>
      </div>

      <div id="disqus" class="jumbotron mt-5 mb-0 text-center">
        <p>DISQUS - comentarios</p>
      </div>
    </div>

<?php get_footer(); ?>  