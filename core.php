<?php
/*Plugin Name: share post on telegram
Plugin URI: http://siteyar.net/plugins/
Description:  پلاگین انتشار پست‌ها در کانال تلگرام
Author: sadeq yaqobi
Version: 1.0.0
License: GPLv2 or later
Author URI: http://siteyar.net/sadeq-yaqobi/ */


#for security
defined('ABSPATH') || exit();

//defined required const
define('TSP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('TSP_PLUGIN_URL', plugin_dir_url(__FILE__));
const TSP_PLUGIN_INC = TSP_PLUGIN_DIR . '_inc/';
const TSP_PLUGIN_VIEW = TSP_PLUGIN_DIR . 'view/';
const TSP_PLUGIN_ASSETS_DIR = TSP_PLUGIN_DIR . 'assets/';
const TSP_PLUGIN_CLASS_DIR = TSP_PLUGIN_DIR . 'class/';
const TSP_PLUGIN_ASSETS_URL = TSP_PLUGIN_URL . 'assets/';

/**
 * Register and enqueue frontend assets
 */
/*function tsp_register_assets_front() {
    // Register and enqueue CSS
    wp_register_style('tsp-style',TSP_PLUGIN_ASSETS_URL . 'css/front/front-style.css',[],'1.0.0');
    wp_enqueue_style('tsp-style');

    // Register and enqueue JavaScript
    wp_register_script('jquery-toast', TSP_PLUGIN_ASSETS_URL . 'js/jquery.toast.min.js', ['jquery'], '1.0.0', ['strategy' => 'async', 'in_footer' => true]);
    wp_enqueue_script('jquery-toast');
    wp_register_script('tsp-main-js',TSP_PLUGIN_ASSETS_URL . 'js/front/front-js.js', ['jquery'], '1.0.0', ['strategy' => 'async', 'in_footer' => true]);
    wp_enqueue_script('tsp-main-js');
    wp_register_script('tsp-front-ajax',TSP_PLUGIN_ASSETS_URL . 'js/front/front-ajax.js', ['jquery'], '1.0.0', ['strategy' => 'async', 'in_footer' => true]);
    wp_enqueue_script('tsp-front-ajax');

    // localize script
    wp_localize_script('tsp-front-ajax', 'tsp_ajax', [
        'tsp_ajaxurl' => admin_url('admin-ajax.php'),
        '_tsp_nonce' => wp_create_nonce()
    ]);
}

function tsp_register_assets_admin() {
    // Register and enqueue CSS
    wp_register_style('tsp-admin-style',TSP_PLUGIN_ASSETS_URL . 'css/admin/admin-style.css',[],'1.0.0');
    wp_enqueue_style('tsp-admin-style');

    // Register and enqueue JavaScript
    wp_register_script('tsp-admin-js',TSP_PLUGIN_ASSETS_URL . 'js/admin/admin-js.js', ['jquery'], '1.0.0', ['strategy' => 'async', 'in_footer' => true]);
    wp_enqueue_script('tsp-admin-js');
    wp_register_script('tsp-admin-ajax',TSP_PLUGIN_ASSETS_URL . 'js/admin/admin-ajax.js', ['jquery'], '1.0.0', ['strategy' => 'async', 'in_footer' => true]);
    wp_enqueue_script('tsp-admin-ajax');
}
add_action('wp_enqueue_scripts', 'tsp_register_assets_front');
add_action('admin_enqueue_scripts', 'tsp_register_assets_admin');
//activation and deactivation plugin hooks
function tsp_activation_functions()
{
//    any work that needs to do when the plugin is activated like creating tables on database
}

function tsp_deactivation_functions()
{
    //
}
register_activation_hook(__FILE__,'tsp_activation_functions');
register_deactivation_hook(__FILE__,'tsp_deactivation_functions');*/

//including

require_once TSP_PLUGIN_CLASS_DIR . 'TelegramApi.php';


