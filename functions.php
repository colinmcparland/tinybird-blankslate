<?
add_action( 'wp_enqueue_scripts', 'theme_enqueue_custom_scripts' );	
function theme_enqueue_custom_scripts()	{

	$template_url = get_stylesheet_directory_uri();

	wp_register_script( 'main-script',  $template_url.'/js/main.js', 'jquery', "1", true);

	wp_enqueue_script( 'main-script' );

	wp_register_script( 'slick-custom-script',  $template_url.'/js/slick-custom.js', 'jquery', "1", true);

	wp_enqueue_script( 'slick-custom-script' );

	wp_register_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', 'jquery', '1', true);

	wp_enqueue_script( 'slick' );
	
}

?>