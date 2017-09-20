<?php
/**
 * @package 	WordPress
 * @subpackage 	EcoNature
 * @version 	1.3.2
 * 
 * Website WooCommerce Functions
 * Created by CMSMasters
 * 
 */


add_action( 'after_setup_theme', function() {
    add_theme_support( 'woocommerce' );
} );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    } 
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
        global $post, $woocommerce;
       
        if ( has_post_thumbnail() ) {               
            $output .= '<img class="img-fluid" src="'.get_the_post_thumbnail_url( $post->ID, $size ).'">';
        }                        
        
        return $output;
    }
}

/* Woocommerce Dynamic Cart */

function cmsms_woocommerce_cart_dropdown() {
	global $woocommerce; 
	
	$link = $woocommerce->cart->get_cart_url();

	
	$output = '';
	$output .= '<div class="cmsms_dynamic_cart">' .  
		'<a href="' . esc_url($link) . '" class="cmsms_dynamic_cart_button cmsms-icon-basket-3"></a>' . 
		'<div class="widget_shopping_cart_content"></div>' . 
	'</div>';

	echo $output;
}


/* Woocommerce Add to Cart Button */

function cmsms_woocommerce_add_to_cart_button() {
	global $product;
	
	
	if (
		$product->is_purchasable() && 
		$product->is_type( 'simple' ) && 
		$product->is_in_stock()
	) {
		echo '<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->get_id()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="add_to_cart_button cmsms_add_to_cart_button product_type_simple cmsms-icon-basket">' . __('Añadir al Carro', 'econature') . '</a>';
	}
	
	echo '<a href="' . get_permalink($product->get_id()) . '" data-product_id="' . esc_attr($product->get_id()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="cmsms_details_button cmsms-icon-menu">' . __('Ver Detalle', 'econature') . '</a>';
}


/* Woocommerce Rating */

function cmsms_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemprop = $in_review ? 'reviewRating' : 'aggregateRating';
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsms_star_rating\" itemprop=\"{$itemprop}\" itemscope itemtype=\"http://schema.org/{$itemtype}\" title=\"" . sprintf(__('Rated %s out of 5', 'econature'), $rating) . "\">
<div class=\"cmsms_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsms_star\"></span>
	<span class=\"{$icon_trans} cmsms_star\"></span>
	<span class=\"{$icon_trans} cmsms_star\"></span>
	<span class=\"{$icon_trans} cmsms_star\"></span>
	<span class=\"{$icon_trans} cmsms_star\"></span>
</div>
<div class=\"cmsms_star_color_wrap\" style=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsms_star_color_inner\">
		<span class=\"{$icon_color} cmsms_star\"></span>
		<span class=\"{$icon_color} cmsms_star\"></span>
		<span class=\"{$icon_color} cmsms_star\"></span>
		<span class=\"{$icon_color} cmsms_star\"></span>
		<span class=\"{$icon_color} cmsms_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . __('out of 5', 'econature') . "</span>
</div>
";
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



if ( version_compare( WOOCOMMERCE_VERSION, "2.1" ) >= 0 ) {
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );
} else {
	define( 'WOOCOMMERCE_USE_CSS', false );
}


add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 8;
  return $cols;
}

function custom_pre_get_posts_query( $q ) {

    $tax_query = (array) $q->get( 'tax_query' );

    $tax_query[] = array(
           'taxonomy' => 'product_cat',
           'field' => 'slug',
           'terms' => array( 'destacados' ), // Don't display products in the clothing category on the shop page.
           'operator' => 'NOT IN'
    );


    $q->set( 'tax_query', $tax_query );

}
add_action( 'woocommerce_product_query', 'custom_pre_get_posts_query' );

//imagen destacada grande home tienda
add_image_size( 'destacado-tienda', 1110, 515, true );


add_filter( 'woocommerce_default_address_fields' , 'custom_wc_checkout_fields' );
function custom_wc_checkout_fields( $address_fields ) {
    $address_fields['city']['label'] = __('Comuna', 'blank');
    $address_fields['address_1']['label'] = __('Dirección', 'blank');
    $address_fields['address_1']['placeholder'] = '';
    $address_fields['address_2']['label'] = __('Departamento / Torre / Villa / Condominio', 'blank');
    $address_fields['address_2']['placeholder'] = '';
    // Returning Checkout customized fields
    return $address_fields;
}

/*
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );


if ( !function_exists( 'custom_woocommerce_states' ) ) { 
    require_once '/woocommerce-chilean-peso.php'; 
} 
*/
  
# add this in your plugin file and that's it, the calculate_shipping method of your shipping plugin class will be called again
function action_woocommerce_checkout_update_order_review($array, $int)
{
    WC()->cart->calculate_shipping();
    return;
}
add_action('woocommerce_checkout_update_order_review', 'action_woocommerce_checkout_update_order_review', 10, 2);

add_filter( 'woocommerce_cart_shipping_method_full_label', 'remove_title_from_shipping_label', 10, 2 );  
function remove_title_from_shipping_label($label, $method) {
$new_label = preg_replace( '/^.+:/', '', $label );
return $new_label;
}