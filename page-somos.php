<?
/*

Template name: Somos

*/
?>
<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-somos">
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
          <div class="image-visual">
            <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="">
          </div>

        <?php
          endwhile;
          endif;
        ?>
          <div class="joia-people">
            <div class="row justify-content-center joia-main-people">
               <?php
                  $args = array (
                      'post_type' => 'equipo',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'categoria_equipo',
                              'field'    => 'slug',
                              'terms' => 'director'
                        )
                      )
                    );
                   $the_query = new WP_Query ($args);
                ?>
               <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <div class="col-sm-8 col-md-6 col-lg-5">
                    <div class="media">
                      <img class="d-flex mr-3" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">

                      <div class="media-body align-self-center">
                        <?php the_title( '<h5>','</h5>' ); ?>
                        <p><?php echo get('persona_cargo'); ?></p>
                        <p><a href="mailto:<?php echo get('persona_email'); ?>"><?php echo get('persona_email'); ?></a></p>
                      </div>
                    </div>
                  </div>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>
            </div><!-- main people -->

            <div class="row justify-content-center joia-other-people">

            <?php
               $args = array (
                   'post_type' => 'equipo',
                   'tax_query' => array(
                       array(
                           'taxonomy' => 'categoria_equipo',
                           'field'    => 'slug',
                           'terms' => 'colaborador'
                     )
                   )
                 );
                $the_query = new WP_Query ($args);
             ?>
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="media">
                  <img class="d-flex mr-3" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                  <div class="media-body align-self-center">

                    <?php the_title( '<h6 class="mt-0">','</h6>' ); ?>
                    <p><?php echo get('persona_cargo'); ?></p>
                    <p><a href="mailto:<?php echo get('persona_email'); ?>"><?php echo get('persona_email');?></a></p>
                  </div>
                </div>
              </div>
              <?php endwhile; else: ?>
              <?php endif; ?>
              <?php wp_reset_postdata() ?>
            </div>
          </div>

        </div>
      </div>
    </div>

<?php get_footer(); ?>
