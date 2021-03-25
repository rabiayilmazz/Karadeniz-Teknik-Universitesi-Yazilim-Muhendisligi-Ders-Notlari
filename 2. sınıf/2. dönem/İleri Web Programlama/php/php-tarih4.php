<?php

//$tarih = new DateTime('now', new DateTimeZone('Europe/Istanbul'));

# date('Y-m-d H:i:s')
//echo $tarih->format('Y-m-d H:i:s');
//echo $tarih->getTimestamp();
//$tarih->setTimestamp(time());
//echo $tarih->format('Y-m-d H:i:s');

//$tarih->setTimestamp(time());
//$tarih->modify('+2 day');
//$tarih->setTimezone(new DateTimezone('Europe/Istanbul'));
//echo $tarih->format('Y-m-d H:i:s');

$tarih1 = new DateTime('2017-12-23 20:53:24', new DateTimeZone('Europe/Istanbul'));
$tarih2 = new DateTime();

$fark = $tarih1->diff($tarih2);
$tarih = $fark->format('%y yıl %m ay %d gün %h saat %i dakika %s saniye');

$tarih = str_replace(
    ['0 yıl', ' 0 ay', ' 0 gün', ' 0 saat', ' 0 dakika'],
    '',
    $tarih
);

echo $tarih . ' önce yayınlandı!';



?>