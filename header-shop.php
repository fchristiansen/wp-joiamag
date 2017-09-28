<?php get_header(); 
global $woocommerce;
$aUrl = $woocommerce->cart->get_cart_url();
$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
$micuenta_url = get_permalink( get_option('woocommerce_myaccount_page_id') );
$favoritos_url = $micuenta_url."lista-de-deseos";
?>
<!-- nav tienda -->
    <div id="barra-top-tienda" class="navbar fixed-top">
        <div class="container">
              <div class="row">
                  <div class="container_boton_info">
                        <a id="info" href=""></a>
                  </div>
                  <div class="col-md-6 offset-md-6">
                      <div class="container_botones_tienda">
                              <ul class="botones_tienda pull-right">
                                <li><a id="inicio" href="<?php echo $shop_page_url;?>"></a></li>
                                <li>
                                    <a id="favoritos" href="<?php echo $favoritos_url; ?>"></a>
                                    <?php
                                    if(is_user_logged_in()){
                                    $user_id = get_current_user_id();  
                                    $result = $wpdb->get_row( "SELECT count(*) as tot FROM wp_crm_wish_list WHERE user_id = ".$user_id." " );
                                    $tot = $result->tot;
                                    }else{
                                      $tot = 0;
                                    }
                                    ?>
                                    <div class="exp love-count"><?php echo $tot;?></div>


                                </li>
                                <li><a id="perfil" href="<?php echo $micuenta_url; ?>"></a>
                                </li>
                                <li>
                                  <a id="bolsa" href="<?php echo $aUrl;?>"></a>
                                  <div class="exp">
                                    <?php
                                    
                                    $count = $woocommerce->cart->cart_contents_count;
                                    echo $count;
                                    ?>

                                  </div>
                                </li>
                              </ul>
                      </div>
                  </div>

              </div>
        </div>
    </div>