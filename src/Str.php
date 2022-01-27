<?php

namespace Dillonsmart\Libs;

class Str {

    /**
     * Transforms the value to uppercase
     *
     * @param $value
     * @return string
     */
    public static function upper($value)
    {
        return strtoupper($value);
    }

    /**
     * Transforms the value to lowercase
     * 
     * @param $value
     * @return string
     */
    public static function lower($value)
    {
        return strtolower($value);
    }

}
