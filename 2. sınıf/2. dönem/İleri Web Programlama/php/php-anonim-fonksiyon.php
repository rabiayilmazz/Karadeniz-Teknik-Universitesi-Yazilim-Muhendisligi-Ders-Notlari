<?php

function test(){
    return 'test';
}

//echo test();

$test = function($par){
    return 'test ' . $par;
};

$test2 = function() use ($test){
    return 'test2 ' .  $test('test3');
};

echo $test2();

//echo $test('tayfun');

$arr = [
    function(){
        return '1. fonksiyon';
    },
    function(){
        return '2. fonksiyon';
    },
    function(){
        return '3. fonksiyon';
    }
];

//echo $arr[rand(0,2)]();

$soyad = 'Erbilen';

function filtrele($isim)
{
    global $soyad;
    return $isim . ' ' . $soyad; 
}

$arr = ['Tayfun','Güner','Meltem','Zeynep'];
$arr = array_map(function($isim) use($soyad){
    return $isim . ' ' . $soyad; 
}, $arr);

print_r($arr);

?>