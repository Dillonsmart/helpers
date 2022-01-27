<?php

namespace Dillonsmart\Libs;

class Jso {

    /**
     * Encodes the value
     *
     * @param $value
     * @return false|string
     */
    public static function encode($value)
    {
        return json_encode($value);
    }

    /**
     * Decodes the value
     * 
     * @param $value
     * @return mixed
     */
    public static function decode($value)
    {
        return json_decode($value);
    }

}
