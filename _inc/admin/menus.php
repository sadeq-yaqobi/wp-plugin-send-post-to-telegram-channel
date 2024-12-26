<?php
add_action('admin_menu','sp_register_options');

// if you want to set plugin setting page under general setting menu, not by a specific menu
function sp_register_options()
{
    add_options_page(
        'تنظیمات پلاگین اشتراک مطلب در کانال تلگرام',
        'اشتراک مطلب در کانال تلگرام',
        'manage_options',
        'telegram-share-post',
        'tsp_telegram_share_post_admin_layout' //it was implemented in view/admin/setting.php
    );
}

include_once TSP_PLUGIN_VIEW . 'admin/setting.php';
