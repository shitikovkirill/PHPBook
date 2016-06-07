<?php
//------------------------------------------------------------
//
// NOTE:
//
// Try NOT to add any code line in this file.
//
// Use "theme\Main.php" to add your hooks.
//
//------------------------------------------------------------

if ( ! class_exists( 'Timber' ) ) {
    add_action( 'admin_notices', function() {
        echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
    } );
    return;
}

include_once('includes/advanced-custom-fields/acf.php' );
include 'includes/custom-fields.php';

    /*ACF*/
// Fields
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('includes/add-ons/acf-repeater/repeater.php');
    include_once('includes/add-ons/acf-gallery/gallery.php');
    include_once('includes/add-ons/acf-flexible-content/flexible-content.php');
    include_once('includes/add-ons/advanced-custom-fields-limiter-field/limiter-v4.php');


    include_once('includes/registered-fields/presets/acf-presets.php');
    include_once('includes/registered-fields/google-font/acf-googlefonts.php');
    //include_once('includes/registered-fields/googlemap/acf-googlemap.php');
}

//font awesome picker
include_once('includes/add-ons/advanced-custom-fields-font-awesome/acf-font-awesome.php');



// Options Page
include_once( 'includes/add-ons/acf-options-page/acf-options-page.php' );


add_filter('acf/options_page/settings','register_options_page');

function register_options_page($options)
{
    $options['title'] = __('Circlevisions','um_lang');
    $options['pages'] = array(
        __('Theme Setting','um_lang'),
        __('Home Setting','um_lang'),
        __('Featured Listings Setting','um_lang'),
        __('Properties Search Setting','um_lang'),
        __('Buying Sell Setting','um_lang'),
        __('Community Setting','um_lang'),
        __('About Me Setting','um_lang'),
        //__('Testimonial Setting', 'um_lang'),
        //__('Quick Search Setting','um_lang'),
        //__('Featured Setting','um_lang'),
        __('Blog Setting','um_lang'),
        __('Email Form Setting','um_lang'),

    );
    return $options;
}


add_action( 'acf/input/admin_enqueue_scripts', 'acf_collapse_fields' );
function acf_collapse_fields(){
    wp_enqueue_script('collapse-fields_js', get_template_directory_uri().'/includes/collapse-fields/acf_collapse.js', array(),'',TRUE);
    wp_enqueue_style('collapse-fields_css',  get_template_directory_uri().'/includes/collapse-fields/acf_collapse.css' , false, "1.0");
}

/*ACF*/

require_once( __DIR__ . '/boot/bootstrap.php' );