<?php
function tsp_telegram_share_post_admin_layout()
{

    if (!current_user_can('manage_options')) {
        return;
    }
    if (isset($_GET['setting-update'])) {
        add_settings_error('setting', 'setting-message', 'تنظیمات ذخیره گردید.', 'success');
    }
    settings_errors('setting-message');

    ?>
    <div class="tsp-wrap">
        <form action="options.php" method="post">
            <h1><?php echo esc_html(get_admin_page_title()) ?></h1>
            <?php
            settings_fields('telegram-share-post'); // Output security fields
            do_settings_sections('telegram-share-post-html');// Output setting sections
            // Submit Button
            echo '<div class="submit-wrapper tsp-submit-wrapper">';
            submit_button('ذخیره تغییرات', 'primary large');
            echo '</div>';
            ?>
        </form>
    </div>

    <?php
}

// Initialize plugin settings and fields
function tsp_setting_init()
{

    register_setting('telegram-share-post', '_tsp_option_name', 'tsp_form_sanitize_input');

    // Add settings section
    add_settings_section('tsp_settings_section', '', '', 'telegram-share-post-html');
    // Add settings fields for information that need to customize plugin features
    add_settings_field('tsp_settings_field', '', 'tsp_render_form', 'telegram-share-post-html', 'tsp_settings_section');
}

add_action('admin_init', 'tsp_setting_init');

function tsp_render_form()
{
    $tsp_setting = get_option('_tsp_option_name') ? get_option('_tsp_option_name') : null;

    ?>
    <div class="tsp-element-wrapper">
        <label for="chat_id">آی‌دی کانال تلگرام</label>
        <input id="chat_id" type="text" name="_tsp_option_name[_tsp_chat_id]"
               value="<?php echo $tsp_setting['_tsp_chat_id'] ?? '' ?>">

        <label for="bot_token">توکن بات تلگرام</label>
        <input id="bot_token" type="text" name="_tsp_option_name[_tsp_bot_token]" value="<?php echo $tsp_setting['_tsp_bot_token'] ?? '' ?>">
    </div>
    <?php
}

// sanitize inputs
function tsp_form_sanitize_input($input)
{
    $input['_tsp_chat_id'] = sanitize_text_field($input['_tsp_chat_id']);
    $input['_tsp_bot_token'] = sanitize_text_field($input['_tsp_bot_token']);

    return $input;
}
