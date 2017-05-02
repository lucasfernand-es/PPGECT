<?php if(!isset($content_width)) $content_width = 640;
define('CPOTHEME_ID', 'allegiant');
define('CPOTHEME_NAME', 'Allegiant');
define('CPOTHEME_VERSION', '1.0.8');
//Other constants
define('CPOTHEME_LOGO_WIDTH', '215');
define('CPOTHEME_USE_SLIDES', true);
define('CPOTHEME_USE_FEATURES', true);
define('CPOTHEME_USE_PORTFOLIO', true);
define('CPOTHEME_USE_SERVICES', true);
define('CPOTHEME_USE_TESTIMONIALS', true);
define('CPOTHEME_USE_TEAM', true);
define('CPOTHEME_USE_CLIENTS', true);
define('CPOTHEME_PREMIUM_NAME', 'Allegiant Pro');
define('CPOTHEME_PREMIUM_URL', '//www.cpothemes.com/theme/allegiant');

//Load Core; check existing core or load development core
$core_path = get_template_directory().'/core/';
if(defined('CPOTHEME_CORELITE')) $core_path = CPOTHEME_CORELITE;
require_once $core_path.'init.php';

$include_path = get_template_directory().'/includes/';

//Main components
require_once($include_path.'setup.php');

//Include Welcome Screen
require get_template_directory() . '/core/welcome-screen/welcome-page-setup.php';

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();
    acf_add_options_sub_page("Página Inicial");
    acf_add_options_sub_page("Cabeçalho");
    acf_add_options_sub_page("Rodapé");
    acf_add_options_sub_page("Display");

}


function wpb_adding_scripts() {
    // Register the script like this for a theme:
    wp_register_script( 'unslider', get_template_directory_uri() . '/js/unslider.js', array( 'jquery' ) );
    wp_enqueue_script('unslider');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );


function wptuts_styles_with_the_lot()
{
    // Register the style like this for a theme:
    wp_register_style( 'unslidercss', get_template_directory_uri() . '/css/unslider.css', array(), null, 'all' );

    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'unslidercss' );
}

add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );

function wptuts_styles()
{
    // Register the style like this for a theme:
    wp_register_style( 'unsliderdots', get_template_directory_uri() . '/css/unslider-dots.css', array(), null, 'all' );

    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'unsliderdots' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_styles' );