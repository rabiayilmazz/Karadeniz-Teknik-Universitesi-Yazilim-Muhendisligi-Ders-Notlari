<?php

    /*
        scandir()
        glob()
    */

    //$dosyalar = array_filter(scandir('.'), 'is_dir');
    //print_r($dosyalar);

    //$dosyalar = glob('*{/,txt}', GLOB_BRACE);
    //print_r($dosyalar);

    function dosya_listele($dizin_adi)
    {
        $dosyalar = scandir($dizin_adi);
        echo '<ul>';
            foreach ($dosyalar as $dosya){
                if ( !in_array($dosya, ['.', '..']) ){
                    echo '<li>' . $dosya;
                    if ( is_dir($dizin_adi . '/' . $dosya) ){
                        dosya_listele($dizin_adi . '/' . $dosya);
                    }
                    echo '</li>';
                }
            }
        echo '</ul>';
    }

    //dosya_listele('.');

    function listele($dizin_adi)
    {
        echo '<ul>';
            $dosyalar = glob($dizin_adi);
            foreach ($dosyalar as $dosya){
                echo '<li>' . $dosya;
                if (is_dir($dosya)){
                    listele($dosya . '/*');
                }
                echo '</li>';
            }
        echo '</ul>';
    }

    listele('*');

?>