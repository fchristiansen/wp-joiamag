<?php get_header(); 
global $woocommerce;
$aUrl = $woocommerce->cart->get_cart_url();
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
                                <li><a id="inicio" href=""></a></li>
                                <li>
                                    <a id="favoritos" href=""></a>
                                    <div class="exp">1</div>


                                </li>
                                <li><a id="perfil" href=""></a>
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