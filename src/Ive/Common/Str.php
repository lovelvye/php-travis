<?php

namespace Ive\Common;

class Str
{
    public static function toUpper($str)
    {
        return strtoupper($str);
    }

    public static function toLower($str)
    {
        return strtolower($str);
    }

    public static function addSlashes($str)
    {
        return addslashes($str);
    }

    public static function stripSlashes($str)
    {
        return stripslashes($str);
    }

    static public function trim($str, $chars = " \t\n\r\0\x0B")
    {
        return trim($str, $chars);
    }
}
