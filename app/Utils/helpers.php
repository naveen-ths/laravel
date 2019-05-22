<?php

if (!function_exists('setting')) {

    function setting($key, $default = null)
    {
        
        if (is_null($key)) {
            return new \App\Setting();
        }

        if (is_array($key)) {
            return \App\Setting::set($key[0], $key[1]);
        }

        $value = \App\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }

}

if (!function_exists('pr')) {

    function pr($val)
    {
        echo '<pre>';
        print_r($val);
        echo '</pre>';
    }

}