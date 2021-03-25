<?php

/*
    Unix Zaman,
    1 Ocak 1970 den beridir geçen saniye sayısına denilen sayısal veri tipidir.
*/

# date()
# getdate()
# time()

# yıl-ay-gün saat:dakika:saniye

//echo date('Y-m-d H:i:s');

//$tarih = getdate();
//print_r($tarih);

$time = time() - ((60 * 60 * 24) * 35);

//echo date('Y-m-d H:i:s', $time);

$tarih = getdate($time);

print_r($tarih);
