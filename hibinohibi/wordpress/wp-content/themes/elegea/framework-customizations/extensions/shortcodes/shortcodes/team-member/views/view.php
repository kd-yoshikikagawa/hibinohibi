<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}


?>
<div class="fw-team">
	<div class="fw-team-image"><img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($atts['name']); ?>"/></div>

    	<div class="fw-team-meta">
		<div class="fw-team-name">
			<h3><?php echo esc_html($atts['name']); ?></h3>
			<span><?php echo esc_html($atts['job']); ?></span>
          
		</div>
		<div class="fw-team-social">
			<ul class="team-social-links">
               <?php foreach ($atts['social_profiles'] as $social) { ?>
                <li><a class="ulink" target="_blank" href="<?php echo esc_attr($social['social_link']); ?>"><?php echo esc_attr($social['social_name']); ?></a></li>
                <?php } ?>
            </ul>
		</div>
        
	</div>



</div>
