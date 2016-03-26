<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 3/26/16
 * Time: 12:25 PM
 */
if (! function_exists('slugify')) {
    /**
     * @param $text
     * @return mixed|string
     */
    function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}

if (!function_exists('get'))
{
    /**
     * @param $param1
     * @param $param2
     * @return mixed
     */
    function get($param1 , $param2 )
    {
        return is_null($param1) || $param1 === "" ? $param2 : $param1;

    }
}

if (!function_exists('isAssoc')) {
    /**
     * @param array $arr
     * @return bool
     */
    function isAssoc($arr)
    {
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
}

if (!function_exists('generateRandomString'))
{
    /**
     * @param int $length
     * @return string
     */
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

