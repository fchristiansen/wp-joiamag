<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

$author_id = $curauth->ID;
$user_roles=$curauth->roles; 
$display_name = $curauth->data->display_name;



get_header( 'shop' ); 


?>
   <div class="footer-over">
      <div class="page page-content page-resultados">
        <div class="container">
         <div class="page-heading-title page-heading-title-tienda">
            <?php custom_tienda_title();?>
         </div>
		 <h2 class="title-author">Mostrando productos de: <?php echo $display_name;?></h2>
		
		 <?php
		    $args1 = array(
			    'author'     =>  $author_id,
			    'post_type'  => 'product'
			);

						
			$loop = new WP_Query( $args1 );
		 	if ($loop->have_posts() ) : 
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
			//echo "aca van los otros 3";
			$image2 = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'store-item' );
			$_product = wc_get_product( $loop->post->ID );

			if( $_product->is_on_sale() ) {
				$onsale = apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $loop->post, $_product );
			}else{
				$onsale = "";
			}

			$contenido.='<div class="col-md-3 mb-4">
                         <div class="producto">
						 '.$onsale.'
                          <div class="producto-image">
                            <a href="'.$_product->get_permalink().'">
                                <img class="img-fluid" src="'.$image2[0].'" alt="">
                            </a>
                          </div>
                          <div class="producto-header producto-header-sm">
                                <div class="producto-nombre">
                                   <p>'.$_product->get_title().'</p>
                                </div>
                                <div class="producto-precio">
                                  <p>'.$_product->get_price_html().'</p>
                                </div>
                          </div>
                        </div><!-- producto -->
                      </div>';
		
		 $i++;
		 endwhile; 
		 endif;
    	 wp_reset_postdata(); ?>

    	 <!-- grilla productos -->
          <section class="grilla-productos">
               <div class="row">
                      <?php echo $contenido;?>
                 </div> <!-- row -->
          </section>
          <!-- ==== end grilla productos ==== -->		
		</div>
	</div>
</div>


<?php get_footer( 'shop' );