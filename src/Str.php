<?php

namespace Amirmojiry\StringUtils;

class Str
{
    /**
     * Determine if a given string contains a given substring.
     * 
     * @param string $haystack
     * @param string|string[] $needls
     * @return bool
     */
    public static function contains ($haystack, $needles)
    {
        foreach ( (array) $needles as $needle) {
            if ($needle !== '' && mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a given string contains all array values.
     * 
     * @param string $haystack
     * @param string[] $needles
     * @return bool
     */
    public static function containsAll ($haystack, array $needls)
    {
        foreach ($needles as $needls) {
            if (!static::contains($haystack, $needls)) {
                return false;
            }
        }

        return true;
    }
}