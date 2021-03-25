<?php

// arama kısmında
// üye kaydı
// uye-duzenle.php?id=5
//key=value&key=value
//?kelime=tayfun&id=5

function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
}

$_GET = array_map('form_filtrele', $_GET);
$_REQUEST = array_map('form_filtrele', $_REQUEST);

function get($name)
{
    if (isset($_GET[$name]))
        return $_GET[$name];
}

function request($name)
{
    if (isset($_REQUEST[$name]))
        return $_REQUEST[$name];
}

/*
$id = (int) get('id');

if (!is_int($id) || !$id){
    echo 'ID sadece sayı olmalıdır';
    exit;
}
*/

//echo get('deneme');

//print_r($_REQUEST);

echo request('kelime');

?>

<form action="php-get.php?id=5" method="post">

    Arama:
    <input type="text" value="<?php echo get('kelime') ?>" name="kelime">
    <hr>

</form>