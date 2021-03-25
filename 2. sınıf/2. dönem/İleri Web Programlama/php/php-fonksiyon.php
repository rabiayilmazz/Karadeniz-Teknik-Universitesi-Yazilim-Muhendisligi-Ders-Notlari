<?php

    function test()
    {
        return "test";
    }

    $a = test();
    //echo $a;

    function topla($sayi1 = 2, $sayi2 = 10)
    {
        return ($sayi1 + $sayi2);
    }

    $toplam = topla();
    //echo $toplam;

    $ad = 'Tayfun';

    /*
        global
        $GLOBALS
    */

    function adsoyad($soyad)
    {
        // $GLOBALS['ad']
        global $ad;
        return $ad . ' ' . $soyad;
    }

    //echo adsoyad('Erbilen');

    $yazi = "tayfun";

    //echo substr($yazi, 0, 10) . '..';

    function kisalt($str, $limit = 10)
    {
        $karakterSayisi = strlen($str);
        if ($karakterSayisi > $limit){
            $str = substr($str, 0, $limit) . '..';
        }
        return $str;
    }

    echo kisalt($yazi, 5);

?>