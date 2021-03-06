<?php
/*

Template name: Ediciones

*/
?>
<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-ediciones">
        <div class="container">
        <?php wc_print_notices();?>
        <?php
           $args = array (
               'post_type' => 'product',
               'product_cat' => 'ediciones',
               'posts_per_page' => 1
             );
             $the_query = new WP_Query ($args);
         ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
        $firstPostID = $post->ID;
        ?>
          <div class="ediciones-hero">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="main-edicion-picture">
                  <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
              </div>
              <div class="col-md-6">

                <?php the_title('<h1>','</h1>'); ?>
                <p><?php echo get('ediciones_fecha'); ?></p>
                <ul class="list-unstyled">
                  <?
                  $f = 0;
                  $bloques = get_order_group('ediciones_contenido');
                  foreach($bloques as $bloque){
                        $e = $e +1;
                        $f++;
                        $nombres = get_order_field('ediciones_contenido', $bloque); // guarda las fotos en un array
                        foreach ($nombres as $nombre) {
                         ?>
                              <li><?php echo get('ediciones_contenido',$e ,$nombre); ?></li>
                         <? } ?>
                    <? } ?>
                </ul>
                <div>
                  <!--<button type="button" class="btn btn-black">Comprar ahora</button>-->
                   <form action="" method="post">
                    <input name="add-to-cart" type="hidden" value="<?php echo $post->ID ?>" />
                    <input name="quantity" type="hidden" value="1" min="1"  />
                    <input name="submit" type="submit" value="Comprar ahora" class="btn btn-black" />
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- ultima edicion -->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <?php wp_reset_postdata() ?>

          <div class="row posts">
          <?php
             $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
             $args = array (
                 'post_type' => 'product',
                 'product_cat' => 'ediciones',
                 'post__not_in' => array($firstPostID),
                 'posts_per_page' => 4,
                 'paged' => $paged
               );
               $the_query = new WP_Query ($args);
           ?>
          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-6 col-sm-3 post">
              <div class="card card-edicion">
                <div class="card-img-top">
                  <a href="<?php the_permalink(); ?>">
                    <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                  </a>
                </div>
                <div class="card-body">
                  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p class="date"><?php echo get('ediciones_fecha'); ?></p>
                </div>
              </div>
            </div>

            <?php endwhile; ?>
            
            <?php else: ?>
            <?php endif; ?>

            <?php wp_reset_postdata() ?>

          </div>

          <div class="text-center mt-3">
            <!--<button type="button" class="btn btn-secondary btn-md">
              Cargar más
            </button>-->

            <nav class="woocommerce-pagination">
              <?php 
                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $the_query->max_num_pages,
                      'current'      => max( 1, get_query_var( 'paged' ) ),
                      'format'       => '?paged=%#%',
                      'show_all'     => false,
                      'type'         => 'plain',
                      'end_size'     => 2,
                      'mid_size'     => 1,
                      'prev_next'    => true,
                      'add_args'     => false,
                      'add_fragment' => '',
                  ) );
              ?>
          </nav>
          </div>
        </div>

      </div>
    </div>

<?php get_footer(); ?>
