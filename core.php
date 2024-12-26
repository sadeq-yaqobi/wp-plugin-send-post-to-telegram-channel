<?php
/*Plugin Name: انتشار پست‌ها در کانال تلگرام
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


function tsp_register_assets_admin() {
    // Register and enqueue CSS
    wp_register_style('tsp-admin-style',TSP_PLUGIN_ASSETS_URL . 'css/admin/admin-style.css',[],'1.0.0');
    wp_enqueue_style('tsp-admin-style');

}

add_action('admin_enqueue_scripts', 'tsp_register_assets_admin');


//including
require_once TSP_PLUGIN_CLASS_DIR . 'TelegramApi.php';
require_once TSP_PLUGIN_INC . 'admin/menus.php';
require_once TSP_PLUGIN_VIEW . 'admin/setting.php';

add_action('publish_post', 'TelegramApi::send_post_to_telegram_channel', 10, 2);
add_action('publish_tech', 'TelegramApi::send_post_to_telegram_channel',10,2);

