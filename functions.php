<?php

add_filter( 'woocommerce_email_recipient_customer_on_hold_order', 'customer_on_hold_order_for_bacs', 10, 2 );
	function customer_on_hold_order_for_bacs( $recipient, $order ) {
    if( is_a('WC_Order', $order) && $order->get_payment_method() !== 'bacs' ) {
		do_action( 'woocommerce_email_header', $email_heading, $email ); {
        <p> echo ("test."); </p>
    }
}
 	 return $recipient;
}
