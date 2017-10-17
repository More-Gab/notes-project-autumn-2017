<?php

namespace codingbootcamp\tinymvc;

class request
{
    /**
     * get information from request or a default value
     */
    public static function get($name, $default = null)
    {
        if(isset($_REQUEST[$name]))
        {
            return $_REQUEST[$name];
        }
        else
        {
            return $default;
        }
    }
}
