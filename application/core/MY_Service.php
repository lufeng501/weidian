<?php

/**
 * Describe:
 * User: lufeng501@126.com
 * Date: 2016-10-10 21:17
 */
class MY_Service
{
    public function __construct()
    {
    }

    function __get($key)
    {
        $CI = & get_instance();
        return $CI->$key;
    }
}