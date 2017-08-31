<?php
/*

Template name: Contacto

*/
?>
<?php get_header(); ?>
    <div class="footer-over">
      <div class="page page-content page-contacto">
        <div class="container">
	    <?php
          if (have_posts()) :
          	while (have_posts()) :
          		the_post(); ?>
          <div class="page-heading-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="text-block text-block-center text-center">
            <div class="row justify-content-md-center">
              <div class="col col-md-8">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        <?php
          	endwhile;
          endif;
        ?>
        <?php include(TEMPLATEPATH . '/include-form-contacto.php'); ?>
        </div><!-- container -->
      </div>
    </div>

<?php get_footer(); ?>
