<?php

namespace Dillonsmart\Libs;

class Arr {

    /**
     * Pushes a new item to the given array
     *
     * @param $arr
     * @param $value
     * @return int
     */
    public static function push($arr, $value)
    {
        return array_push($arr, $value);
    }

}
