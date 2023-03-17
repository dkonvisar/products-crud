<?php

namespace app\helpers;

class UtilHelper
{
    public static function random_string($n)
    {
        $digits = implode('', range(0, 9));
        $low_letters = implode(range('a', 'z'));
        $up_letters = strtoupper($low_letters);
        $characters = $digits . $low_letters . $up_letters;
        $str = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }

        return $str;
    }
}