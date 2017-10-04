<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
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
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $wpdb;
$token = wp_get_session_token();
if(is_user_logged_in()){
$user_id = get_current_user_id();
}else{
  $user_id = 0;
}

                      $prefix = $wpdb->prefix;
                      //echo $prefix;
                      $query = "SELECT ".$prefix."posts.ID, ".$prefix."posts.post_title FROM ".$prefix."posts 
                      INNER JOIN wp_crm_wish_list wl ON wl.prod_id = ".$prefix."posts.ID 
                      WHERE post_type = 'product' AND wl.user_id = $user_id ORDER BY dateadded DESC";

                      $myrows = $wpdb->get_results( $query );
                      
                    ?>
       <section class="section resumen_compra my-account-section clearfix">
              <div class="row">
                  <div class="col-lg-12">
                    <div class="box_tabla_resumen tabla_checkout tabla_deseos">
                        <div class="title_tabla">
                          Lista de favoritos
                        </div>
                        <div class="container_tabla_resumen tabla_checkout ">
                          <div class="container-processing"></div>
                          <table class="table table_lista_productos tabla_checkout ">
                            <thead>
                              <?php if($myrows) : 
                               
                              ?>
                              <tr>
                                <th class="padding-left-th" colspan="2">producto</th>
                                <th>valor</th>
                                <th>&nbsp;</th>
                              </tr>
                              <?php else : ?>
                              <tr><td colspan="2">No hay productos en lista de deseos.</td></tr>
                              <?php endif;?>
                            </thead>
                            <?php if($myrows) : ?>
                            <tbody>
                              <?php foreach($myrows as $prod) : 
                                $_product = wc_get_product( $prod->ID ); 
                                $url = get_permalink( $prod->ID );
                                $thumbnail = get_the_post_thumbnail_url( $prod->ID );
                              ?>
                              <tr class="item-<?php echo $prod->ID;?>">
                                <th scope="row">
                                   <a href="<?php echo $url;?>"><img class="img-fluid" src="<?php echo $thumbnail;?>" alt="<?php echo $prod->post_title;?>" title="<?php echo $prod->post_title;?>"></a>
                                 </th>
                                <td><?php echo $prod->post_title;?></td>
                                <td><?php echo $_product->get_price_html();?></td>
                                <td><a href="<?php bloginfo('url')?>/add-to-wishlist?remove_item=<?php echo $token;?>" class="remove wish-item" aria-label="Borrar este artículo" data-product_id="<?php echo $prod->ID;?>">×</a></td>
                              </tr>
                             <?php endforeach;?>

                            </tbody>
                          <?php endif;?>
                          </table> <!-- tabla lista productos -->
                          </div><!-- container tabla resumen -->
                        </div><!-- box tabla resumen -->
         </div>
              </div>
          </section> <!-- resumen compra -->