<?
/*

Template name: Mixtapes

*/
?>
<?php get_header(); ?>

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
      <div class="owl-carousel mix-carousel">
        <?php
         $args = array (
             'post_type' => 'mixtapes',
             'posts_per_page' => 1
           );
           $the_query = new WP_Query ($args);
       ?>
      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div>
          <a href="<?php the_permalink(); ?>">
            <div class="thumb">
              <img class="img-fluid" src="<?php echo get('mixtape_caratula'); ?>">
            </div>
            <div class="song-title">
              <?php the_title(); ?>
            </div>
            <div class="counting">
              01/18
            </div>
          </a>
        </div>

      <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_postdata() ?>

      </div><!-- mix carousel -->
    </div>

<?php get_footer(); ?>
