<?php

# date_default_timezone_get()
date_default_timezone_set('Europe/Istanbul');
setlocale(LC_TIME, 'tr_TR');
# 23 Aralık 2018, Cumartesi

echo strftime('%d %B %Y, %A - %T', strtotime('-2 day'));

?>