<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
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
	exit;
}
?>

<div class="woocommerce-order">

	<?php if ( $order ) : ?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

			<div class="row no-gutters box_gris">

				<div class="col-lg-2">
					<?php _e( 'Order number:', 'woocommerce' ); ?>
					<?php echo $order->get_order_number(); ?>
				</div>

				<div class="col-lg-3">
					<?php _e( 'Date:', 'woocommerce' ); ?>
					<?php echo wc_format_datetime( $order->get_date_created() ); ?>
				</div>

				<div class="col-lg-3">
					<?php _e( 'Total:', 'woocommerce' ); ?>
					<?php echo $order->get_formatted_order_total(); ?>
				</div>

				<?php if ( $order->get_payment_method_title() ) : ?>

				<div class="col-lg-4">
					<?php _e( 'Payment method:', 'woocommerce' ); ?>
					<?php echo wp_kses_post( $order->get_payment_method_title() ); ?>
				</div>

				<?php endif; ?>

			</div>

		<?php endif; ?>
		<div class="texto_indicaciones">
		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		</div>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
		<div class="clear"></div>
	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

	<?php endif; ?>

</div>
