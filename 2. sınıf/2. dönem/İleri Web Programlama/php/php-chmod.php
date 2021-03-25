<?php

/*
    chmod()

    1. numara 0 ile başlar
    2. numara dosya sahibini izinleri
    3. numara kullanıcı gruplarının izinleri
    4. numara geri kalan herkesin

    1 = execute (işlem) izni
    2 = yazma izni
    4 = okuma izni

*/

chmod('test.txt', 0760);

?>