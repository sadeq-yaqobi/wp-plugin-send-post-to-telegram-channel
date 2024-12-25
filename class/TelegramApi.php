<?php

class TelegramApi
{
    protected static $botToken = 'bot7062509197:AAEE5lwf1eNG-v4rpiRoadHnARLKogrf9UE';

    protected static $baseURL = 'https://api.telegram.org';
    protected static $chat_id = '@siteyar_theme';

    public static function send_post_to_telegram_channel($ID,$post)
    {
        $text ='
        <a href="'.get_the_permalink().'">'.get_the_title().'</a>
        <p>'.wp_trim_words($post->post_content,60,"...").'</p>
        ';
        self::connect_to_api(self::$chat_id,$text);
    }

    public static function connect_to_api($chat_id, $text)
    {
        $request_url = self::$baseURL . '/' . self::$botToken . '/sendMessage?chat_id=' . $chat_id . '&text=' . $text;

        $response=wp_remote_get($request_url);


        if (is_array($response) && !is_wp_error($response)) {
            echo '<pre style="padding:25px;font-size:15px;line-height:1.5;background:#e1e8f0">';
//            var_dump($response);
            echo '</pre>';
        }
    }
}
//function prettyDebug($var) {
//    echo '<pre style="
//direction: ltr;
//        background: #1e1e1e;
//        color: #d4d4d4;
//        padding: 15px;
//        border-radius: 5px;
//        font-family: Consolas, Monaco, monospace;
//        font-size: 14px;
//        line-height: 1.4;
//        margin: 10px 0;
//        border: 1px solid #404040;
//        overflow: auto;
//    ">';
//
//    if (is_array($var) || is_object($var)) {
/*        highlight_string("<?php\n" . var_export($var, true) . ";\n?>");*/
//    } else {
//        var_dump($var);
//    }
//    echo '</pre>';
//}



