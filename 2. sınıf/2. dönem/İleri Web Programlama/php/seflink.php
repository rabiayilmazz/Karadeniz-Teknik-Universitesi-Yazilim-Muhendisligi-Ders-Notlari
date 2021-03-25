<?php

function Seflink($str)
{
    // türkçe karakterler ile birlikte küçült
    $str = mb_strtolower($str, 'UTF-8');
    // türkçe karakterleri değiştir
    $str = str_replace(
        ['ı', 'ğ', 'ü', 'ç', 'ö', 'ş', '#'],
        ['i', 'g', 'u', 'c', 'o', 's', 'sharp'],
        $str
    );
    // normal karakterler ve sayılar hariç herşeyi tire işaretine döndür
    $str = preg_replace('/[^a-z0-9]/', '-', $str);
    // birden fazla tire işaretini tek bir tire işaretine çevir
    $str = preg_replace('/-+/', '-', $str);
    // sağ ve solunda bulunan tire işaretlerini kaldırarak geriye döndür
    return trim($str, '-');
}

$str = '-Benim İçin 2017 nasıl geçti? c#';
echo Seflink($str);

?>