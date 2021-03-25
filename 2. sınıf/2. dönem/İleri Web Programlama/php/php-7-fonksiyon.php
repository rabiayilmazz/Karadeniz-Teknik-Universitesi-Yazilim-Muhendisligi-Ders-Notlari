<?php

declare(strict_types = 1);

function topla(int $sayi1, int $sayi2): string
{
    return (string) ($sayi1 + $sayi2);
}

function arr(array $arr): string
{
    return implode(',', $arr);
}

//echo topla(1,3);

print_r(arr(["test","test2"]));

?>