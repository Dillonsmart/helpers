<?php

namespace Dillonsmart\Libs;

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
     * Capitalize the first letter of the value
     *
     * @param $value
     * @return string
     */
    public static function capitalize($value): string
    {
        return ucfirst(strtolower($value));
    }

    /**
     * Transforms the value to uppercase
     *
     * @param $value
     * @return string
     */
    public static function upper($value): string
    {
        return strtoupper($value);
    }

    /**
     * Transforms the value to lowercase
     *
     * @param $value
     * @return string
     */
    public static function lower($value): string
    {
        return strtolower($value);
    }

    /**
     * Adds padding to the left of the string
     *
     * @param $value
     * @param string $padding
     * @return string
     */
    public static function paddingLeft($value, string $padding = ' '): string
    {
        return $padding . $value;
    }

    /**
     * Adds padding to the right of the string
     *
     * @param $value
     * @param string $padding
     * @return string
     */
    public static function paddingRight($value, string $padding = ' '): string
    {
        return $value . $padding;
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
     * @param $value
     * @param $length
     * @return false|string
     */
    public static function charTrim($value, $length)
    {
        return substr($value, 0, $length);
    }

    public function replace($value, $string, $offset, $length)
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

    public static function random($length = 16)
    {
        // return a random string to length
    }

    public static function jumble($value)
    {
        // jumble the order of the words in a string
    }

}
