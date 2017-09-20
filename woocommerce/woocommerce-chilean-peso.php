<?php
function custom_woocommerce_states($states) { 
 
    $states['CL'] = array( 
        'CL1' => __('I Tarapacá', 'woocommerce'),
        'CL2' => __('II Antofagasta', 'woocommerce'),
        
 ); 
 
    return $states; 
} 
