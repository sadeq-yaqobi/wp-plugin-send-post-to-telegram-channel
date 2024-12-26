<?php

class TelegramApi
{

    protected static $baseURL = 'https://api.telegram.org';


    public static function send_post_to_telegram_channel($ID, $post)
    {
        $caption = '
        <a href="' . get_the_permalink() . '">' . get_the_title() . '</a>' . PHP_EOL
            . wp_trim_words($post->post_content, 60, "...");


        $photo = get_the_post_thumbnail_url();

        // because of using local server we need to change the url to the real url
        $photo = str_replace('http://7learn-wp.local', 'https://theme.siteyar.net/siteyar', $photo);

        $chat_id = get_option('_tsp_option_name')['_tsp_chat_id'];
        self::connect_to_api($chat_id, $photo, $caption);
    }

    public static function connect_to_api($chat_id, $photo, $caption)
    {
        $query_string = http_build_query([
            'chat_id' => $chat_id,
            'photo' => $photo,
            'parse_mode' => 'HTML', // to parse html tags in caption
            'caption' => $caption,
//            'protect_content'=>1 // to avoid saving and forwarding content
        ]);

        $botToken  ='bot'. get_option('_tsp_option_name')['_tsp_bot_token'];

        $request_url = self::$baseURL . '/' . $botToken . '/sendPhoto?' . $query_string;


        $response = wp_remote_get($request_url);


        if (is_array($response) && !is_wp_error($response)) {
            echo '<pre style="padding:25px;font-size:15px;line-height:1.5;background:#e1e8f0">';
//            var_dump($response);
            echo '</pre>';
        }
    }
}




