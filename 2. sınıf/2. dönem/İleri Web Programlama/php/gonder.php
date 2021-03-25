<?php

    // $_POST

    //print_r($_POST);

    //echo $_POST['ad'];

    // strip_tags()
    // htmlspecialchars()
    // trim()

    /*
    if (trim($_POST['hakkimda']) == ''){
        echo 'lütfen hakkınızda bir şeyler yazın.';
    } else {
        print_r($_POST);
    }
    */

    //$hakkimda = htmlspecialchars($_POST['hakkimda']);
    //echo htmlspecialchars_decode($hakkimda);

    function form_filtrele($post)
    {
        return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
    }

    $_POST = array_map('form_filtrele', $_POST);

    function post($name)
    {
        if (isset($_POST[$name]))
            return $_POST[$name];
    }

    echo post('hakkimda');

?>