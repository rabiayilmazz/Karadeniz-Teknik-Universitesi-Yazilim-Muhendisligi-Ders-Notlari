<?php

    // dosya oluşturma
    // touch()

    //touch('test.txt');
    //touch('test2.txt', time() - 84000);

    /*
        Kipler;
            r - okumak için aç
            r+ - okumak ve yazmak için aç
            w - yazmak için aç (dosya yok ise oluşturulur varsa üstüne yazar)
            w+ - okumak ve yazmak için aç
            a - yazmak için aç
            a+ - okumak ve yazmak için aç
    */

    /*
        fopen() - dosyayı açmamızı sağlıyor
        fclose() - dosyayı kapatmamızı sağlıyor
        fwrite() - dosyaya birşeyler yazmamızı sağlar
        fread() - tüm içeriği okur
        fgets() - satır satır okur
        feof() - dosyanın sonuna gelinip gelinmediğini döndürür
        filesize() - dosya karakter sayısını döndürür
        unlink() - dosyayı siler
    */

    $icerik = 'Buda bir örnektir ' . rand(0,1000) . "\n";

    $dosya = fopen('test.txt', 'a+');
    //fwrite($dosya, $icerik);
    //echo fread($dosya, filesize('test.txt'));

    //while (!feof($dosya)){
        //echo fgets($dosya) . '<br>';
    //}

    //$degerler = file('test.txt');
    //print_r($degerler);

    fclose($dosya);

    //unlink('test2.txt');

    /*
        file_get_contents()
        file_put_contents()
    */

    //$icerik = file_get_contents('http://erbilen.net');
    //echo $icerik;

    file_put_contents('test.txt', 'bu yeni değer', FILE_APPEND);

?>