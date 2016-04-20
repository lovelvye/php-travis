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

    static public function addSlashes($str)
    {
        return addslashes($str);
    }

    static public function stripSlashes($str)
    {
        return stripslashes($str);
    }
}
