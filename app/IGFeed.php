<?php


namespace App;


use Illuminate\Support\Arr;

class IGFeed
{
    /**
     * @param int $count
     * @return array
     */
    public static function fetch($count = 9)
    {
        $result = static::fetchData('https://api.instagram.com/v1/users/11763535382/media/recent?count='.$count.'&access_token=11763535382.e85aa35.9d2a68b8f2f44370bc6ab9be0112eaaf');

        return Arr::get(json_decode($result, true), 'data', []);
    }

    /**
     * @param string $url
     * @return bool|string
     */
    protected static function fetchData($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
