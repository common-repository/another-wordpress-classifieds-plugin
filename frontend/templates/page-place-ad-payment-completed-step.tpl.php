<h2><?php $payments->show_payment_completed_page_title( $transaction ); ?></h2>

<?php
    if ( isset( $transaction ) && get_awpcp_option( 'show-create-listing-form-steps' ) ) {
        awpcp_listing_form_steps_componponent()->show( 'payment', compact( 'transaction' ) );
    }
?>

<?php foreach ($messages as $message): ?>
    <?php echo awpcp_print_message($message) ?>
<?php endforeach ?>

<?php $payments->show_payment_completed_page( $transaction, $url, $hidden ); ?>
