<?php

function multi_upload($dosyalar)
{

    $sonuc = [];

    // hataları kontrol et
    foreach ($dosyalar['error'] as $index => $error){
        if ($error == 4){
            $sonuc['hata'] = 'Lütfen dosya seçin!!';
        } elseif ($error != 0){
            $sonuc['hata'][] = 'Dosya yüklenirken bir sorun oluştu #' . $dosyalar['name'][$index];
        }
    }

    // hata yoksa devam et
    if (!isset($sonuc['hata'])){

        // dosya uzantılarını kontrol et
        global $gecerli_dosya_uzantilari;

        foreach ($dosyalar['type'] as $index => $type){
            if (!in_array($type, $gecerli_dosya_uzantilari)){
                $sonuc['hata'][] = 'Dosya geçersiz bir formatta #' . $dosyalar['name'][$index];
            }
        }

        if (!isset($sonuc['hata'])){

            // boyutu kontrol et
            $maxBoyut = (1024 * 1024);

            foreach ($dosyalar['size'] as $index => $size){
                if ($size > $maxBoyut){
                    $sonuc['hata'][] = 'Dosya beklenenden fazla büyük boyutta #' . $dosyalar['name'][$index];
                }
            }

            if (!isset($sonuc['hata'])){

                // dosyaları yükle
                foreach ($dosyalar['tmp_name'] as $index => $tmp){
                    $dosyaAdi = $dosyalar['name'][$index];
                    $yukle = move_uploaded_file($tmp, 'upload/' . $dosyaAdi);
                    if ($yukle){
                        $sonuc['dosya'][] = 'upload/' . $dosyaAdi;
                    } else {
                        $sonuc['hata'][] = 'Dosya yüklenemedi! #' . $dosyaAdi;
                    }
                }

            }

        }

    }

    return $sonuc;

}

$gecerli_dosya_uzantilari = [
    'text/plain'
];
$sonuc = multi_upload($_FILES['dosya']);

if (isset($sonuc['dosya'])){

    print_r($sonuc['dosya']);

    if (isset($sonuc['hata'])){
        print_r($sonuc['hata']);
    }

} elseif (isset($sonuc['hata'])){

    if (is_array($sonuc['hata'])){
        echo implode('<br>', $sonuc['hata']);
    } else {
        echo $sonuc['hata'];
    }

}