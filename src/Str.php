<?php

namespace Dillonsmart\Helpers;

use Exception;

class Str {

    /**
     * Implodes an array to return a string
     *
     * @param $arr
     * @param string $separator
     * @return string
     */
    public static function toString($arr, string $separator = ' '): string
    {
        return implode($separator, $arr);
    }

    /**
     * Capitalize the first letter of the string
     *
     * @param $string
     * @return string
     */
    public static function capitalize($string): string
    {
        return ucfirst(strtolower($string));
    }

    /**
     * Transforms the string to uppercase
     *
     * @param $string
     * @return string
     */
    public static function upper($string): string
    {
        return strtoupper($string);
    }

    /**
     * Transforms the string to lowercase
     *
     * @param $string
     * @return string
     */
    public static function lower($string): string
    {
        return strtolower($string);
    }

    /**
     * Adds padding to the left of the string
     *
     * @param $string
     * @param string $padding
     * @return string
     */
    public static function paddingLeft($string, string $padding = ' '): string
    {
        return $padding . $string;
    }

    /**
     * Adds padding to the right of the string
     *
     * @param $string
     * @param string $padding
     * @return string
     */
    public static function paddingRight($string, string $padding = ' '): string
    {
        return $string . $padding;
    }

    /**
     * Limit the number of words in a string
     *
     * @param $value
     * @param int $limit
     * @return string
     */
    public static function words($value, int $limit = 100): string
    {
        $arr = Arr::toArray($value);
        $words = sizeof($arr);

        if($words > $limit) {
            return static::toString(Arr::spliceEnd($arr, $words - $limit));
        }

        return $value;

    }

    /**
     * Returns the word count
     *
     * @param $string
     * @return array|int|string[]
     */
    public function wordCount($string)
    {
        return str_word_count($string);
    }

    /**
     * Returns the character count
     *
     * @param $string
     * @return int
     */
    public function charCount($string): int
    {
        return strlen($string);
    }

    /**
     * Limit the number of characters in a string
     *
     * @param $string
     * @param $length
     * @return false|string
     */
    public static function charTrim($string, $length)
    {
        return substr($string, 0, $length);
    }

    public static function replace($value, $string, $offset, $length)
    {
        // replace all occurrences in a string
    }

    public static function mask($value, $character = '*', $offset = 0, $length = 0)
    {
        // mask part of a string
    }

    /**
     * Find occurrence of a substring
     *
     * @param $needle
     * @param $haystack
     * @return int
     */
    public static function has($needle, $haystack): int
    {
        return strpos($haystack, $needle) > 0;
    }

    /**
     * Find occurrences of a number of substrings
     *
     * @param $needles
     * @param $haystack
     * @return bool
     */
    public static function hasAny($needles, $haystack): bool
    {
        foreach($needles as $needle) {
            if(strpos($haystack, $needle) > 0) {
                return true;
            }
        }

        return false;
    }

    /**
     * Find occurrences of a number of substrings in a number of strings
     *
     * @param $needles
     * @param $haystacks
     * @return bool
     */
    public static function anyHasAny($needles, $haystacks): bool
    {
        foreach($haystacks as $haystack) {
            foreach($needles as $needle) {
                if(strpos($haystack, $needle) > 0) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Returns the number of substring occurrences
     *
     * @param $haystack
     * @param $needle
     * @param int $offset
     * @param $length
     * @return int
     */
    public static function occurrences($haystack, $needle, int $offset = 0, $length = null): int
    {
        if (!is_null($length)) {
            return substr_count($haystack, $needle, $offset, $length);
        } else {
            return substr_count($haystack, $needle, $offset);
        }
    }

    /**
     * Generates a random string
     *
     * @param int $length
     * @return string
     * @throws Exception
     */
    public static function random(int $length = 16): string
    {
        $string = '';

        while (strlen($string) < $length) {
            $size = $length - strlen($string);
            $bytes = random_bytes($size);
            $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $string;
    }

    public static function jumble($string)
    {
        // jumble the order of the words in a string
    }

}
