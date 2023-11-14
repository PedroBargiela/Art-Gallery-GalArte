<?php

if (!function_exists('nameToUrl')) {
    function nameToUrl($name)
    {
        //Remplaza los espacios por guiones
        $url = str_replace(' ', '-', $name);
        return $url;
    }
}
