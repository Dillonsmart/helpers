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

    /**
     * Splice the given array.
     * By default, the first index of the array is spliced.
     *
     * @param $arr
     * @param $offset Defaults is 0
     * @param $length Default is 1
     * @return array
     */
    public static function splice($arr, $offset = 0, $length = 1)
    {
        return array_splice($array, $offset, $length);
    }

    /**
     * Splice the given array from the end.
     * By default, the last index will be remvoed.
     *
     * @param $arr
     * @param $length
     * @return mixed
     */
    public static function splice_end($arr, $length = 1)
    {
        return array_splace($arr, sizeof($arr) - $length, $length);
    }

}
