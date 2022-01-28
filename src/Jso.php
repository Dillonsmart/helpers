<?php

namespace Dillonsmart\Libs;

class Jso {

    /**
     * JSON validation error message
     *
     * @var string
     */
    private static $validationError = 'The parsed json is invalid.';

    /**
     * Encodes the value
     *
     * @param $value
     * @return false|string
     */
    public static function encode($value)
    {
        if(static::validate(json_encode($value))) {
            return static::$validationError;
        }

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
        if(static::validate($value)) {
            return static::$validationError;
        }

        return json_decode($value);
    }

    /**
     * Checks whether the parsed JSON is valid
     *
     * @param $string
     * @return bool
     */
    public static function validate($string): bool
    {
        json_decode($string);

        return JSON_ERROR_NONE === json_last_error();
    }

}
