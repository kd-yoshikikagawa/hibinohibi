<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$clients = $atts['clients'];
$custom_class = $atts['custom_class'];

?>

    <div class="clients <?php echo esc_attr($custom_class); ?>">
        <div class="row">
            <?php foreach($clients as $client) { ?>
        
          <div class="client col-md-4"><a target="_blank" href="<?php echo esc_attr($client['website']); ?>"><img src="<?php echo esc_attr($client['logo']['url']); ?>"  /></a></div>
        
        
        <?php } ?>
        
        </div>
        </div>
