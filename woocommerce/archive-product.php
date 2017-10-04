<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); 
?>



    <div class="footer-over">
      <div class="page page-content page-resultados">
        <div class="container">
         <div class="page-heading-title page-heading-title-tienda">
            <?php custom_tienda_title();?>
        </div>
		
		<?php
		if(is_product_category()){
			 $cat = woocommerce_category_description();
			 echo "<h2 class='title-category'>".$cat->name."</h2>";
		}else{

        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'destacados', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        $i = 1;
        $contenido = "";
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
        if($i == 1){
        ?>
		<section class="section producto_destacado">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'destacado-tienda' );?>

    		 <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" alt=""></a>
             
              <div class="producto_titulo_precio">
                  <div class="nombre">
                  	<a href="<?php the_permalink(); ?>">
                     <p class=""><?php the_title(); ?></p>
                 	</a>
                  </div>
                  <div class="precio">
                      <p class=""><?php woocommerce_template_loop_price();?></p>
                  </div>

              </div>
          </section> <!-- producto destacado -->
		 <?php 
		} else {
			//echo "aca van los otros 3";
			$image2 = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'store-item' );
			$_product = wc_get_product( $loop->post->ID );

			if( $_product->is_on_sale() ) {
				$onsale = apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $loop->post, $_product );
			}else{
				$onsale = "";
			}

			$contenido.='<div class="col-md-4 mb-4">
                         <div class="producto">
						 '.$onsale.'
                          <div class="producto-image">
                            <a href="'.get_the_permalink().'">
                                <img class="img-fluid" src="'.$image2[0].'" alt="">
                            </a>
                          </div>
                          <div class="producto-header producto-header-md">
                                <div class="producto-nombre">
                                   <p>'.get_the_title().'</p>
                                </div>
                                <div class="producto-precio">
                                  <p>'.$_product->get_price_html().'</p>
                                </div>
                          </div>
                        </div><!-- producto -->
                      </div>';
		}
		 $i++;
		 endwhile; ?>
    	<?php wp_reset_query(); ?>


    	 <!-- grilla productos -->
          <section class="grilla-productos-destacados">
               <div class="productos">
                 <div class="row">
                      <?php echo $contenido;?>
                 </div> <!-- row -->
               </div><!-- productos -->
          </section>
          <!-- ==== end grilla productos destacados ==== -->
		<?php } ?>
		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				//do_action( 'woocommerce_before_shop_loop' );
			?>
			
			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php
						/**
						 * woocommerce_shop_loop hook.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );
					?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php
				/**
				 * woocommerce_no_products_found hook.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			?>

		<?php endif; ?>



	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>
		</div>
	</div>
</div>
<?php get_footer( 'shop' ); ?>
