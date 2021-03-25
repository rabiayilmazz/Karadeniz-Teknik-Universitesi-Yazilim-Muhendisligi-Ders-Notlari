<?php

/*
    print_r()
    var_dump()
    explode()
    implode()
    count()
    is_array()
    shuffle()
    array_combine()
    array_count_values()
    array_flip()
    array_key_exists()
*/

$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen',
    'yas' => 24
];

print_r($arr);
var_dump($arr);

$test = 'tayfun,erbilen,udemy';
$arr = explode(',', $test);

//print_r($arr);

$string = implode('|', $arr);
//echo $string;
//echo count($arr);

/*
if (is_array($arr)){
    echo 'bu bir dizidir';
} else {
    echo 'bu bir dizi değildir!';
}
*/

$arr = [1,2,3,4,5,6,7,8,9,10];
shuffle($arr);
//print_r($arr);

$keys = ['ad', 'soyad'];
$values = ['tayfun', 'erbilen'];

$arr = array_combine($keys, $values);
//print_r($arr);

$arr = ['tayfun','erbilen','udemy','tayfun','udemy'];
$arr2 = array_count_values($arr);
//print_r($arr2);

$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen',
    'yas' => 24
];
$arr2 = array_flip($arr);
//print_r($arr2);

$arr = [
    'ad' => 'tayfun',
    'a' => [
        'b' => [
            'c' => [
                'd' => 'e',
                'e' => 'f'
            ]
        ]
    ]
];

/*
if (array_key_exists('c', $arr)){
    echo 'ad anahtarı var!';
} else {
    echo 'ad anahtarı yok!';
}
*/

function _array_key_exists($cur_key, $arr){
    foreach ($arr as $key => $val){
        if ($key == $cur_key){
            return true;
        }
        if (is_array($val)){
            return _array_key_exists($cur_key, $val);
        }
    }
    return false;
}

if (_array_key_exists('e', $arr)){
    echo 'c anahtarı var!';
} else {
    echo 'c anahtarı yok!';
}

?>