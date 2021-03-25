<?php

//echo $yer . ' ' . $sayi . ' tane ' . $tur . ' var.';

$yer = 'Africa';
$sayi = 5;
$tur = 'monkeys';
//echo 'There are ' . $sayi . ' ' . $tur . ' in ' . $yer . '.';

//printf('%s %d tane %s var.', 'Afrikada', 5, 'maymun');
//echo '<br>';
//printf('There are %2$d %3$s in %1$s.', 'Africa', 5, 'monkeys');

$tarih = '2018-7-6';
echo vsprintf('%d-%02d-%02d', explode('-', $tarih));

//echo sprintf('Pi %.2f tür.', 3.14);