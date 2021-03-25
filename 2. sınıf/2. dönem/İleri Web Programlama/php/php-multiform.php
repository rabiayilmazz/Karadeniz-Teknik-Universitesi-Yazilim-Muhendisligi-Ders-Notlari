<?php

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

// giriş yap post edilmişse
if (post('giris_yap'))
{
    print_r($_POST);
}

// kayıt ol post edilmişse
if (post('kayit_ol'))
{
    print_r($_POST);
}

?>

<form action="" method="post">
    <h3>Giriş Yap</h3>
    Kullanıcı Adı: <br>
    <input type="text" name="kadi"> <hr>
    Şifre: <br>
    <input type="password" name="sifre"> <br>
    <input type="hidden" name="giris_yap" value="1">
    <button type="submit">Giriş Yap</button>
</form>

<hr>

<form action="" method="post">
    <h3>Kayıt Ol</h3>
    Kullanıcı Adı: <br>
    <input type="text" name="kadi"> <hr>
    Şifre: <br>
    <input type="password" name="sifre"> <br>
    E-posta: <br>
    <input type="text" name="eposta"> <hr>
    <input type="hidden" name="kayit_ol" value="1">
    <button type="submit">Kayıt Ol</button>
</form>