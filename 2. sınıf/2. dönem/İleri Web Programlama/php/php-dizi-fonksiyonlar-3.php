<?php

/*
    array_values()
    array_push()
    array_unshift()
    array_keys()
    current()
    end()
    next()
    prev()
    reset()
    extract()
    asort()
    arsort()
    ksort()
    krsort()
*/

$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen'
];

$arr2 = array_values($arr);
$arr = ['tayfun','erbilen','tayfun','erbilen','udemy'];
//print_r($arr);
$arr2 = array_unique($arr);
//print_r(array_values($arr2));

$arr = ['tayfun','erbilen'];
array_push($arr, 'udemy', 'prototurk', '93academy');
$arr['anahtar'] = 'yeni değer';
//print_r($arr);

$arr = ['tayfun','erbilen'];
array_unshift($arr, 'udemy');
//print_r($arr);
$arr2 = [
    'site' => 'udemy'
];
$arr = array_merge($arr2, $arr);
//print_r($arr);

$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen',
    'a' => [
        'b' => 'c',
        'd' => [
            'e' => 'f'
        ]
    ]
];

$keys = array_keys($arr);

function _array_keys($arr)
{
    static $keys = [];
    foreach ($arr as $key => $val){
        array_push($keys, $key);
        if (is_array($val)){
            _array_keys($val);
        }
    }
    return $keys;
}

$keys = _array_keys($arr);
//print_r($keys);

$arr = ['tayfun','erbilen', 'udemy', 'prototurk', '93academy'];
/*
echo current($arr) . '<br>';
echo next($arr) . '<br>';
echo next($arr) . '<br>';
echo prev($arr) . '<br>';
echo next($arr) . '<br>';
reset($arr);
echo next($arr) . '<br>';
//echo end($arr);
*/

$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen'
];
extract($arr);
//echo $soyad;

$arr = [3,1,6,4];
//print_r($arr);
//asort($arr);
//arsort($arr);
//print_r($arr);

$arr = [
    'c' => 'değer 3',
    'a' => 'değer 1',
    'b' => 'değer 2'
];
krsort($arr);
print_r($arr);