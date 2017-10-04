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
 * 
 * @cmsms_package 	EcoNature
 * @cmsms_version 	1.3.2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;

$category = get_term_by( 'slug', 'destacados', 'product_cat' );
$term_id = $category->term_id;

//echo $term_id;

/**
 * woocommerce_before_single_product hook
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );


if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class('cmsms_single_product'); ?>>
<section class="section producto_detalle">
          <div class="row">
              <div class="col-sm-12 col-lg-8">
              	<?php	woocommerce_show_product_loop_sale_flash();
					
					$availability = $product->get_availability();

					if (esc_attr($availability['class']) == 'out-of-stock') {
						echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
					}
				?>
                <div class="owl-carousel owl-theme img_detalle_producto">
                  <?php 
					//if ( $product->is_type( 'variable' ) ) {
					//woocommerce_show_product_images();
					//}else{ 
						if ( has_post_thumbnail( $product->id ) ) {

                         $attachment_ids[0] = get_post_thumbnail_id( $product->id );
                         $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' ); 
                         ?>    
                        <img src="<?php echo $attachment[0] ; ?>" class="owl-item img-fluid"  />
                    <?php } 
                    	$gallery_attachment_ids = $product->get_gallery_attachment_ids();
                    		if($gallery_attachment_ids){
	                    		foreach( $gallery_attachment_ids as $attachment_id ) 
				                {
				                $image_src = wp_get_attachment_image_src( $attachment_id,'full' );
				                $image_link = wp_get_attachment_url( $attachment_id ); ?>
	                    		<img src="<?php echo $image_src[0] ; ?>" class="owl-item img-fluid"  />
                    <?php 		}
                    		}
					//}
					?>

                </div>
              </div>
              <div class="col-sm-12 col-lg-4">
                  <div class="descripcion">

                    <?php woocommerce_template_single_title();?>
					<?php
					$categorias_html = "";
					$terms = get_the_terms( $post->ID, 'product_cat' );
					    foreach ( $terms as $term ) {
					    	$term_link = get_term_link( $term );
					        if( $term->name == 'Destacados' ){
					          // print_r($term_id);
					        }else{
					            $categorias_html.= ' <a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>, ';
					        }
					    }
					
					 
					$categorias_html = rtrim($categorias_html, ", ");
					?>
                    <h2><?php echo $categorias_html?></h2>
                    <p class="autor">Por: 
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
                    </p>  
                    <?php woocommerce_template_single_price();?>
                    <?php lk_woocommerce_product_content();?>
                    <div class="box_select">
						<?php woocommerce_template_single_add_to_cart();?>
                    </div>
					<div class="button_wishlist">
						<?php 
						if(is_user_logged_in()){
							$data_logged = 1;
						}else{
							$data_logged = 0;
						}?>
						<a href="<?php bloginfo('url')?>/add-to-wishlist" data-product-id="<?php echo $product->id;?>" data-logged="<?php echo $data_logged;?>" class="add_to_wishlist">Agregar a Favoritos</a>
						<div class="mssg-wishlist"></div>
					</div>
                  </div><!-- end descripcion -->

              </div>
          </div>
          <div class="box_thumbs">
            <div class="row">
            	<?php
            	  $contador = 0;
            	  if ( has_post_thumbnail( $product->id ) ) {
	                $attachment_ids[0] = get_post_thumbnail_id( $product->id );
	                $attachment = wp_get_attachment_image_src($attachment_ids[0], 'store-item' ); 
	                ?>    
	                <div class="col-md-2 mb-2">
	                <img class="img-fluid" src="<?php echo $attachment[0] ; ?>" id="<?php echo "muestra".$contador;?>" alt=""/>
                	</div>
                 <?php
             	   }
                 foreach( $gallery_attachment_ids as $attachment_id ) 
                 {
                 $contador++;
                 $image_src = wp_get_attachment_image_src( $attachment_id,'store-item' );
                 $image_link = wp_get_attachment_url( $attachment_id );
                 ?>
	                <div class="col-md-2 mb-2">
	                   <img class="img-fluid" src="<?php echo $image_src[0]?>" id="<?php echo "muestra".$contador;?>" alt=""/>
	                </div>
      			<?php }   ?>
            </div>
          </div>


          </section> <!-- producto detalle -->
          <?php woocommerce_output_related_products();?>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>

<script type="text/javascript">
$(document).ready(function(){	
	// Carousel con thumbs de producto

  $(".img_detalle_producto").owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots:false,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

<?php 
	for($i=0;$i<=$contador;$i++) : ?>
    $('#muestra<?php echo $i;?>').click(function() {
        $('.owl-carousel').trigger('to.owl.carousel', <?php echo $i;?>);
      });
<?php endfor;?>
});
</script>