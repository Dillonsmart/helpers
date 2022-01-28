<?php

namespace Dillonsmart\Helpers;

class Arr {

    /**
     * Explodes a string
     *
     * @param $value
     * @param string $delimiter
     * @return false|string[]
     */
    public static function toArray($value, string $delimiter = ' ')
    {
        return explode($value, $delimiter);
    }

    /**
     * Pushes a new item to the given array
     *
     * @param $arr
     * @param $value
     */
    public static function push($arr, $value): int
    {
        $arr[] = $value;

        return $arr;
    }

    /**
     * Splice the given array.
     * By default, the first index of the array is spliced.
     *
     * @param $arr
     * @param int $offset
     * @param int $length
     * @return array
     */
    public static function splice($arr, int $offset = 0, int $length = 1): array
    {
        array_splice($arr, $offset, $length);

        return $arr;
    }

    /**
     * Splice the given array from the end.
     * By default, the last index will be removed.
     *
     * @param $arr
     * @param int $length
     * @return array
     */
    public static function spliceEnd($arr, int $length = 1): array
    {
        array_splice($arr, sizeof($arr) - $length, $length);

        return $arr;
    }

}
