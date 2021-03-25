<?php

function test2(){
    return 'test';
}

if (function_exists('test')){
    echo 'test fonksiyonu vardır';
} else {
    echo 'test fonksiyonu yoktur';
}

function kisalt($str, $limit = 10)
{
    $karakterSayisi = strlen($str);
    if ($karakterSayisi > $limit){
        if (function_exists('mb_substr')){
            $str = mb_substr($str, 0, $limit, 'utf8') . '..';
        } else {
            $str = substr($str, 0, $limit) . '..';
        }
    }
    return $str;
}

?>