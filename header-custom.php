<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php
    	elegant_description();
    	elegant_keywords();
    	elegant_canonical();
    
    	/**
    	 * Fires in the head, before {@see wp_head()} is called. This action can be used to
    	 * insert elements into the beginning of the head before any styles or scripts.
    	 *
    	 * @since 1.0
    	 */
    	do_action( 'et_head_meta' );
    
    	$template_directory_uri = get_template_directory_uri();
    ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
<?php
	wp_body_open();
