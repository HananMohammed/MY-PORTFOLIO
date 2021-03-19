<?php
use \Illuminate\Support\Str;

if (! function_exists('asset_public')) {
    /**
    * Full asset public path
    */
    function asset_public($path = null)
    {
        return env('FRONT_PUBLIC', 'http://localhost/MY-PORTFOLIO/public/') . $path;
    }
}
