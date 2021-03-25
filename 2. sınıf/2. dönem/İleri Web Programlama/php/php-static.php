<?php

function say(){
    static $sayi = 1;
    echo $sayi . '<br>';
    $sayi++;
}

function yukle($deger){
    static $yuklenenler = [];
    $yuklenenler[] = $deger;
    return $yuklenenler;
}

yukle('test.php');
yukle('a.php');
$yuklenenler = yukle('b.php');

print_r($yuklenenler);