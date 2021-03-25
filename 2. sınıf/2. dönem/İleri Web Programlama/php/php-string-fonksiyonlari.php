<?php

/*
    strlen()
    strstr()
    strpos()
    ucwords() ucfirst() strtolower() strtoupper()
    trim() ltrim() rtrim()
    substr()
    str_replace()
    str_repeat()
*/

$str = 'tayfun erbilen';

//echo strlen($str);
//echo strlen('tayfunerbilen');
//echo strpos('tayfun erbilen', 'n');
//$str = strtoupper($str);
//echo strtolower($str);

$str2 = "-tayfun-erbilen-";
//echo rtrim($str2, '-');
//echo substr($str, 0, -4);

$str3 = 'tayfun erbilen, güner erbilen';

$str3 = str_replace(
    ["tayfun","erbilen","güner"],
    ["ahmet", "talipoğlu", "hakan"],
    $str3
);

for ($i = 1; $i <= 10; $i++){
    $repeatCount = ($i <= 5 ? $i : (10 - $i));
    echo str_repeat('-*0', $repeatCount) . '<br>';
}