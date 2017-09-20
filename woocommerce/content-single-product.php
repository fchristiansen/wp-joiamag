<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;
?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<section id="product-<?php the_ID(); ?>" class="section producto_detalle">

	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		//do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="row">
              <div class="col-sm-12 col-lg-8">
                <div class="img_detalle_producto">
                 <?php 
					woocommerce_show_product_loop_sale_flash();
					
					$availability = $product->get_availability();

					if (esc_attr($availability['class']) == 'out-of-stock') {
						echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
					}
					
				?>
				<?php if ( has_post_thumbnail( $product->id ) ) {
                        $attachment_ids[0] = get_post_thumbnail_id( $product->id );
                         $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' ); ?>    
                        <img class="img-fluid" src="<?php echo $attachment[0] ; ?>" alt="">
                    <?php } ?>

		
                </div>
              </div>
	<div class="col-sm-12 col-lg-4">
		<div class="summary entry-summary descripcion">
			<h3><?php echo $product->get_title();?></h3>
			<h2><?php woocommerce_template_single_meta();?></h2></p>
			<p class="precio"><?php echo $product->get_price_html();?></p>
	<?php 
		
		
		//cmsms_woocommerce_rating('cmsms-icon-star-empty', 'cmsms-icon-star-1');
		
		
		
		woocommerce_template_single_excerpt();
		
		
		
		
		
		//woocommerce_template_single_sharing();
	?> 

			<div class="box_select">
				<?php

				woocommerce_template_single_add_to_cart();
				?>
			</div>
		</div><!-- .summary -->
	</div>
	</div><!-- .row -->

	       <div class="box_thumbs">
            <div class="row">
                <div class="col-md-2 mb-2">
                   <img class="img-fluid" src="assets/img/producto1.jpg" alt="">
                </div>
                 <div class="col-md-2 mb-2">
                   <img class="img-fluid" src="assets/img/producto1.jpg" alt="">
                </div>
                 <div class="col-md-2 mb-2">
                   <img class="img-fluid" src="assets/img/producto1.jpg" alt="">
                </div>
                 <div class="col-md-2 mb-2">
                   <img class="img-fluid" src="assets/img/producto1.jpg" alt="">
                </div>
                <div class="col-md-2 mb-2">
                   <img class="img-fluid" src="assets/img/producto1.jpg" alt="">
                </div>
                 <div class="col-md-2 mb-2">
                   <img class="img-fluid" src="assets/img/producto1.jpg" alt="">
                </div>
            </div>
          </div>

</section><!-- #product-<?php the_ID(); ?> -->
	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
