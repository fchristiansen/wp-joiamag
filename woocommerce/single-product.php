<?php
if( has_term( 'ediciones', 'product_cat' ) ) {
    //$file = 'single-product-ediciones.php';
    wc_get_template_part( 'single-product-ediciones' ); 
} else {
    //$file = 'single-product-default.php';
    wc_get_template_part( 'single-product-default' ); 
}