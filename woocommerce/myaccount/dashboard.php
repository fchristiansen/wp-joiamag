<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

do_action( 'woocommerce_account_dashboard' );
global $wpdb;

if(is_user_logged_in()){
$user_id = get_current_user_id();
}else{
  $user_id = 0;
}
?>
<section class="section resumen_compra my-account-section clearfix">
              <div class="row">
                  <div class="col-lg-5">
                      
                      <p><?php
                      /* translators: 1: user display name 2: logout url */
                      printf(
                        __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ),
                        '<strong>' . esc_html( $current_user->display_name ) . '</strong>',
                        esc_url( wc_logout_url( wc_get_page_permalink( 'myaccount' ) ) )
                      );
                    ?></p>

                    <p><?php
                      printf(
                        __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a> and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
                        esc_url( wc_get_endpoint_url( 'orders' ) ),
                        esc_url( wc_get_endpoint_url( 'edit-address' ) ),
                        esc_url( wc_get_endpoint_url( 'edit-account' ) )
                      );
                    ?></p>
                  </div>
                  <div class="col-lg-1"></div>
                  <!-- col derecha -->
                  <div class="col-lg-6">
                    <?
                      $prefix = $wpdb->prefix;
                      //echo $prefix;
                      $query = "SELECT ".$prefix."posts.ID, ".$prefix."posts.post_title FROM ".$prefix."posts 
                      INNER JOIN wp_crm_wish_list wl ON wl.prod_id = ".$prefix."posts.ID 
                      WHERE post_type = 'product' AND wl.user_id = $user_id ORDER BY dateadded DESC";

                      $myrows = $wpdb->get_results( $query );
                      
                    ?>
                    <div class="box_tabla_resumen tabla_checkout">
                        <div class="title_tabla">
                          Lista de deseos
                        </div>
                        <div class="container_tabla_resumen tabla_checkout ">
                          <table class="table table_lista_productos tabla_checkout tabla_perfil">
                            <thead>
                              <?php if($myrows) : 
                               
                              ?>
                              <tr>
                                <th class="padding-left-th" colspan="2">producto</th>
                                <th>valor</th>
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
                              <tr>
                                <th scope="row">
                                   <a href="<?php echo $url;?>"><img class="img-fluid" src="<?php echo $thumbnail;?>" alt="<?php echo $prod->post_title;?>" title="<?php echo $prod->post_title;?>"></a>
                                 </th>
                                <td><?php echo $prod->post_title;?></td>
                                <td><?php echo $_product->get_price_html();?></td>
                              </tr>
                             <?php endforeach;?>

                            </tbody>
                          <?php endif;?>
                          </table> <!-- tabla lista productos -->

                       
                        </div><!-- container tabla resumen -->
                        </div><!-- box tabla resumen -->

                        <div class="box_tabla_resumen tabla_checkout">
                        <?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>
                        </div><!-- box tabla resumen -->


                  </div>
              </div>
          </section> <!-- resumen compra -->