<?php

use Illuminate\Support\Facades\Request;
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
if (! function_exists('routeName')) {
    /**
     * Full asset public path
     */
    function routeContain($wordForSearch)
    {
        $routeName = Request::route()->getName();
        $contains = Str::contains($routeName, $wordForSearch);
        return $contains;
    }
}
