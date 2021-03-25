<?php

// $_FILES

function yukle($dosya, $boyutLimit = 1, $dosya_uzantilari = null)
{
    $sonuc = [];
    if ($dosya['error'] == 4){
        $sonuc['hata'] = 'Lütfen dosyanızı seçin.';
    } else {
        
        if (is_uploaded_file($dosya['tmp_name'])){
    
            $uzanti = explode('.', $dosya['name']);
            $uzanti = $uzanti[1];
    
            $gecerli_dosya_uzantilari = $dosya_uzantilari ? $dosya_uzantilari : [
                'image/jpeg',
                'image/png',
                'image/gif'
            ];
    
            $gecerli_dosya_boyutu = (1024 * 1014) * $boyutLimit;
    
            $dosya_uzantisi = $dosya['type'];
    
            if (in_array($dosya_uzantisi, $gecerli_dosya_uzantilari)){
    
                if ($gecerli_dosya_boyutu >= $dosya['size']){
    
                    $ad = uniqid();
                    
                    $yukle = move_uploaded_file($dosya['tmp_name'], 'upload/' . $ad . '.' . $uzanti); 
    
                   if ($yukle){
                       $sonuc['dosya'] = 'upload/' . $ad . '.' . $uzanti;
                   } else {
                    $sonuc['hata'] = 'Bir sorun oluştu ve dosyanız yüklenemedi.';
                   }
    
                } else {
                    $sonuc['hata'] = 'Yükleyeceğiniz dosya en fazla 3MB olabilir.';
                }
    
            } else {
                $sonuc['hata'] = 'Yüklediğiniz dosya geçerli bir formatta değil.';
            }
    
        } else {
            $sonuc['hata'] = 'Dosya yüklenirken bir sorun oluştu.';
        }
    }
    return $sonuc;
}

/*
$sonuc = yukle($_FILES['dosya'], 1, ['text/plain']);
if (isset($sonuc['hata'])){
    echo $sonuc['hata'];
} else {
    echo '<a href="' . $sonuc['dosya'] . '">Dosyayı görmek için tıklayın!</a>';
}*/

//print_r($_FILES);

//copy($_FILES['dosya']['tmp_name'], 'upload/' . $_FILES['dosya']['name']);

?>