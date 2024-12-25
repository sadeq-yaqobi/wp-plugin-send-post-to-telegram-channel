<?php

class TelegramApi
{
    protected static $botToken = '7062509197:AAEE5lwf1eNG-v4rpiRoadHnARLKogrf9UE';
    protected static $baseURL='https://api.telegram.org';
    protected static $channelID = '@siteyar_theme';

    public static function send_post_to_telegram_channel($ID, $post)
    {
        $message = 'این یک پیام آزمایشی می‌باشد.';
    }
public static function connect_to_api($channelID, $message)
    {
        $url = self::$baseURL . '/sendMessage?chat_id=' . $channelID . '&text=' . $message;
        $response = wp_remote_get($url);
        return $response;
    }
}