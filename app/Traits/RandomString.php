<?php

namespace App\Traits;

trait RandomString
{
    public static function quickRandom($length = 16){
        return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 5)), 0, $length);
    }
}
