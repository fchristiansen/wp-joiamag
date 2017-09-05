<?php get_header(); ?>

    <div class="footer-over">
      <div class="site-content">
      <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
        <article class="single-page width-sidebar">
          <div class="container">
              <div id="carousel-02" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="" alt="">
                  </div>
                </div> <!-- carousel-inner -->
                <a class="carousel-control-prev" href="#carousel-02" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-02" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            <!-- carousel -->
            <div class="row">
              <div class="col-md-8">
                <div class="single-page-content">
                  <?php the_title( '<h1>', '</h1>' ); ?>
                  <div class="row mt-3 mb-3">
                    <div class="col-md-6">
                      <div class="article-meta">
                          En <a href="javascript:void(0);"><?php
                            foreach((get_the_category()) as $category){
                                  echo $category->name;
                              }
                            ?></a> por <a href="javascript:void(0);"><?php the_author( ); ?></a> hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="share-module share-horizontal">
                        <button type="button" class="sh-btn sh-btn-tw">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="sh-btn sh-btn-fb">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <p>Lorem ipsum dolor sit amet, <a href="javascript:void(0);">consectetur</a> adipiscing elit. Praesent nulla lorem, varius et est at, sagittis interdum ipsum. Cras vitae felis porttitor, vulputate quam vel, porttitor nulla. Aliquam sed hendrerit eros. Duis lacinia augue ac egestas condimentum. Suspendisse potenti. <strong>Donec orci mauris</strong>, euismod vel fringilla sed, feugiat ac felis. Sed consectetur, est eu vulputate sollicitudin, ligula augue finibus urna, non ultrices lorem felis et augue. Curabitur vitae varius arcu. Vivamus lobortis tristique nunc, facilisis suscipit lectus varius eu.</p>
                  <p>Suspendisse mi ex, tincidunt et tincidunt sit amet, mattis ornare nunc. Quisque sollicitudin tincidunt metus. Nam lacinia felis turpis, eget auctor risus lobortis nec. Ut ante lorem, aliquam et mattis vel, feugiat ac est. Nunc commodo tellus ut lorem vehicula dignissim. Etiam eros dui, viverra nec elit id, pellentesque pretium justo. Cras id tempus nisl.</p>

                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/single-page.jpg">

                  <p>Nunc nisi arcu, bibendum vel commodo quis, finibus vitae lacus. Vestibulum vel tincidunt nisi. Suspendisse tincidunt, risus sed sagittis vestibulum, diam urna pulvinar lectus, non fermentum lorem dolor non ante. Curabitur laoreet enim quis porta pharetra. Proin interdum nulla in leo euismod, id vestibulum orci volutpat. Vivamus imperdiet sapien id convallis venenatis. Nam rhoncus, elit quis suscipit cursus, risus purus volutpat odio, quis venenatis lectus erat a nunc. Nunc ac aliquam nisi. Nullam sit amet lacus eu lacus efficitur auctor. Praesent vel est ac magna ultrices consequat.</p>

                  <p>Vivamus porttitor ipsum at augue porttitor, ac volutpat erat pulvinar. Suspendisse porta aliquet risus, nec viverra lorem iaculis ac. Mauris convallis dictum turpis quis lobortis. Quisque vitae commodo augue. Integer fringilla, turpis vitae mollis molestie.</p>

                </div>
                <!-- single page content -->
              </div>
              <div class="col-md-4">
                <!-- sidebar -->
                <?php include(TEMPLATEPATH . '/include-section-sidebar.php'); ?>
              </div>
            </div>
            <!-- row -->
          </div>
        </article>
      </div>
      <?php
     endwhile;
     endif;
     ?>
      <div id="disqus" class="jumbotron mt-5 mb-0 text-center">
        <?php comments_template(); ?>
      </div>
      <div id="recommended" class="jumbotron mb-0 text-center">
        <p>contenidos recomendados</p>
      </div>
    </div>


<?php get_footer(); ?>
