<?php

function isActiveRequest(mixed $url): bool
{
    return request()->is($url);
    // dd($request);
    // $ruta_actual = substr($_SERVER['REQUEST_URI'], 0, -1);

    // if (is_array($url)) {
    // }
    // return true;


    // if (is_array($request)) {

    //     foreach ($request as $path) {
    //         $uri = '/' . $path;
    //         if (strpos(".php", $path)) {
    //             $uri = $path;
    //         }
    //         if ($ruta_actual == $uri) {
    //             return true;
    //             break;
    //         }
    //     }
    // }

    // if (is_string($request)) {
    //     $path = '/' . $request;
    //     if (strpos(".php", $request)) {
    //         $path = $request;
    //     }
    //     if ($ruta_actual == $path) {
    //         return true;
    //     }
    // }

    // return false;
}
