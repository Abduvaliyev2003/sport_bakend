<?php

namespace App\Http\Traits;

trait LocaleTrait
{
    public static function convert($local)
    {
        $lang = $local.'_'.app()->getLocale();
        return "$lang";
    }
}
